<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;
use Illuminate\Notifications\Notifiable;
use Carbon\Carbon;

class Post extends Model
{
    use SoftDeletes;
    use Notifiable;

    protected $fillable = ['title', 'slug', 'excerpt', 'body', 'published_at', 'category_id', 'image'];
    protected $dates = ['published_at'];

    // protected $fillable = ['views'];
    // ttps://hndr.me/blog/laravel-mass-assignment-protection-blacklist-vs-whitelist/

    public function author(){
      return $this->belongsTo(User::class);
    }

    public function category(){
      return $this->belongsTo(Category::class);
    }

    public function tags(){
      return $this->belongsToMany(Tag::class);
    }

    public function comments(){
      return $this->hasMany(Comment::class);
    }

    public function commentsCount(){
      $commentsCount = $this->comments->count();

      if($commentsCount > 0 && isset($commentsCount)){
        return $commentsCount;
      } else {
        return 0;
      }
    }

    public function createComment($comment){
      $this->comments()->create($comment);
    }

    public function createTags($tagString)
    {
        $tags = explode(",", $tagString);
        $tagIds = [];

        foreach ($tags as $tag)
        {
            $newTag = new Tag();
            $newTag->name = ucwords(trim($tag));
            $newTag->slug = str_slug($tag);
            $newTag = Tag::firstOrCreate(
                ['slug' => str_slug($tag)], ['name' => trim($tag)]
            );
            $newTag->save();

            $tagIds[] = $newTag->id;

        }

        $this->tags()->detach();
        $this->tags()->attach($tagIds);
        $this->tags()->sync($tagIds);
    }

    public function setPublishedAtAttribute($value){
      // if empty, set null
      $this->attributes['published_at'] = $value ?: NULL;
    }

    public function getImageUrlAttribute($value){
      $imageUrl = "";

      if(!is_null($this->image)){

        $directory = config('cms.image.directory');
        $imagePath = public_path()."/{$directory}/".$this->image;
        if(file_exists($imagePath))
          $imageUrl = asset("{$directory}/".$this->image);
      }

      return $imageUrl;
    }

    public function getImageThumbUrlAttribute($value){
      $imageUrl = "";

      if(!is_null($this->image)){

        $directory = config('cms.image.directory');
        $extension = substr(strrchr($this->image,'.'), 1);
        $thumbnail = str_replace(".{$extension}", "_thumb.{$extension}", $this->image);
        $imagePath = public_path()."/{$directory}/".$thumbnail;
        if(file_exists($imagePath))
          $imageUrl = asset("{$directory}/".$thumbnail);
      }

      return $imageUrl;
    }

    public function getLink($slug){

        return url("/varovani/{$slug}");
    }

    public function scopeLatestFirst($query){

      return $query->orderBy('published_at', 'DESC');
    }

    public function scopePopular($query){

      return $query->orderBy('views', 'DESC');
    }

    public function scopePublished($query){
      return $query->where("published_at", "<=", Carbon::now());
    }

    public function scopeScheduled($query){
        return $query->where("published_at", ">", Carbon::now());
    }

    public function scopeDraft($query){
        return $query->whereNull("published_at");
    }

    public function publicationLabel(){
      if(!$this->published_at){
        return '<span class="label label-default">Rozepsáno</span>';
      } elseif ($this->published_at && $this->published_at->isFuture()) {
        return '<span class="label label-info">Naplánováno</span>';
      } else {
        return '<span class="label label-success">Publikováno</span>';
      }

    }

    public static function archives()
    {
        return static::selectRaw('count(id) as post_count, year(published_at) year, monthname(published_at) month')
                        ->published()
                        ->groupBy('year', 'month')
                        ->orderByRaw('min(published_at) DESC')
                        ->get();
    }

    public function scopeFilter($query, $filter)
    {

      if (isset($filter['month']) && $month = $filter['month']) {
          // add 0 to month with one digital
          $monthCutZero = sprintf("%02d", $month);
          $query->whereRaw('month(published_at) = ?', [$monthCutZero]);
      }

      if (isset($filter['year']) && $year = $filter['year']) {
            $query->whereRaw('year(published_at) = ?', [$year]);
        }

        // check if any term entered
        if (isset($filter['term']) && $term = $filter['term'])
        {
            $query->where(function($q) use ($term) {
                // $q->whereHas('author', function($qr) use ($term) {
                //     $qr->where('name', 'LIKE', "%{$term}%");
                // });
                // $q->orWhereHas('category', function($qr) use ($term) {
                //     $qr->where('title', 'LIKE', "%{$term}%");
                // });
                $q->orWhere('title', 'LIKE', "%{$term}%");
                $q->orWhere('excerpt', 'LIKE', "%{$term}%");
            });
        }
    }

}
