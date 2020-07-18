<?php

namespace App\Http\Controllers\Administration;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Intervention\Image\Facades\Image;
use OneSignal;
use Notifiable;
use Newsletter;
use MailChimp;
use Facebook;
use GuzzleHttp;
use App\Http\Controllers\GraphController;
use App\Notifications\ArticlePublishedTwitter;
use App\Notifications\ArticlePublishedFacebook;
use Carbon\Carbon;
use App\Providers\FacebookServiceProvider;

// use App\Http\Controllers\Controller;

class PostsController extends AdministrationController
{

    protected $uploadPath;

    public function __construct(){
      parent::__construct();
      $this->uploadPath = public_path(config('cms.image.directory'));

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $onlyTrashed = FALSE;

      if(($status = $request->get('status')) && $status == 'trash'){
          $allPosts = Post::onlyTrashed()->with('category', 'author')->latest()->paginate(10);
          $postCount = Post::onlyTrashed()->count();
          $onlyTrashed = TRUE;
      } elseif($status == 'published') {
          $allPosts = Post::published()->with('category', 'author')->latest()->paginate(10);
          $postCount = Post::published()->count();
          $onlyTrashed = FALSE;
      } elseif($status == 'scheduled') {
          $allPosts = Post::scheduled()->with('category', 'author')->latest()->paginate(10);
          $postCount = Post::scheduled()->count();
          $onlyTrashed = FALSE;
      } elseif($status == 'draft') {
          $allPosts = Post::draft()->with('category', 'author')->latest()->paginate(10);
          $postCount = Post::draft()->count();
          $onlyTrashed = FALSE;
      } elseif($status == 'own') {
          $allPosts = $request->user()->posts()->with('category', 'author')->latest()->paginate(10);
          $postCount = $request->user()->posts()->count();
          $onlyTrashed = FALSE;
      } else {
          $allPosts = Post::with('category', 'author')->latest()->paginate(10);
          $postCount = Post::count();
          $onlyTrashed = FALSE;
      }

      $statusList = $this->statusList($request);

      return view("administration.posts.index", compact('allPosts', 'postCount', 'onlyTrashed', 'statusList'));

    }

    private function statusList($request){
      return [
        'all' => Post::count(),
        'own' => $request->user()->posts()->count(),
        'published' => Post::published()->count(),
        'scheduled' => Post::scheduled()->count(),
        'draft' => Post::draft()->count(),
        'trash' => Post::onlyTrashed()->count()
      ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $postFound)
    {
        return view('administration.posts.create', compact('postFound'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\PostRequest $request)
    {

      $data = $this->handleRequest($request);

      $newPost = $request->user()->posts()->create($data);
      $newPost->createTags($data["post_tags"]);

      if($newPost->published_at <= Carbon::now() && $newPost->published_at != null){

              // OneSignal

              OneSignal::sendNotificationToAll(
                 $newPost->title
              );

              // MailChimp
              $this->notify($request, $newPost);

              // Twitter
             $newPost->notify(new ArticlePublishedTwitter());

              // Facebook
              $newPost->notify(new ArticlePublishedFacebook());

          }

          return redirect('/administration/posts')->with('message', 'Varování úspěšně vytvořeno!');
    }

    private function handleRequest($request){
        $data = $request->all();

        if($request->hasFile('image')){
          $image = $request->file('image');
          $fileName = $image->getClientOriginalName();

          $destination = $this->uploadPath;

          $uploadSuccess = $image->move($destination, $fileName);

          if($uploadSuccess){
            $width = config('cms.image.thumbnail.width');
            $height = config('cms.image.thumbnail.height');
            $extension = $image->getClientOriginalExtension();
            $thumbnail = str_replace(".{$extension}", "_thumb.{$extension}", $fileName);

              Image::make($destination . '/' . $fileName)->resize($width, $height)->save($destination . '/' . $thumbnail);
          }

          $data['image'] = $fileName;
        }

        return $data;
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $postFound)
    {
      //  dd($postFound);
      //  $postFound = Post::findOrFail($post->id);
        return view('administration.posts.edit', compact('postFound'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\PostRequest $request, Post $post)
    {
        $postFound = Post::findOrFail($post->id);
        $data = $this->handleRequest($request);
        $postFound->update($data);
        $postFound->createTags($data['post_tags']);
        return redirect('/administration/posts')->with('message', 'Příspěvek byl úspěšně aktualizován!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
       $postFound = Post::findOrFail($post->id);
       $postFound->delete();
       return redirect('/administration/posts')->with('trash-message', ['Varování přesunuto do koše', $post->slug]);
    }

    public function forceDestroy($slug){
      $postFound = Post::withTrashed()->where('slug',$slug)->first();
      $postFound->forceDelete();

      return redirect('/administration/posts?status=trash')->with('message', 'Varování bylo permanentně smazáno.');
    }

    public function restore($slug){
      $postFound = Post::withTrashed()->where('slug',$slug)->first();
      $postFound->restore();

      return redirect()->back()->with('message','Varování bylo obnoveno z koše.');
    }

    // not used yet
    private function removeImage($image){
      if(!empty($image)){
          $imagePath = $this->$uploadPath."/".$image;
          $extension = substr(strrchr($image, '.'), 1);
          $thumbnail = str_replace(".{$extension}.", "_thumb.{$extension}", $image);
          $thumbnailPath = $this->$uploadPath."/".$thumbnail;

          if(file_exists($imagePath))
              unlink($imagePath);

          if(file_exists($thumbnailPath))
                  unlink($thumbnailPath);
      }
    }

    public function notify(Requests\PostRequest $request, Post $newPost){

        //List ID from .env
        $listId = config('services.mailchimp.list_id');

        //Mailchimp instantiation with Key
        $mailchimp = new \Mailchimp(config('services.mailchimp.apikey'));

        //Create a Campaign $mailchimp->campaigns->create($type, $options, $content)
        $campaign = $mailchimp->campaigns->create('regular', [
            'list_id' => $listId,
            'subject' => 'NOVÁ ZPRÁVA: '.$newPost->title,
            'from_email' => 'disaster-warning-system@outlook.com',
            'from_name' => 'Varovný systém ČR',
            'to_name' => 'Odběratel varování'
        ], [
            'html' => $newPost->title,
            'text' => strip_tags($newPost->body)
        ]);

        //Send campaign
        $mailchimp->campaigns->send($campaign['id']);

        return response()->json(['status' => 'Success']);
    }

}
