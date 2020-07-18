<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use App\Post;
use App\Category;
use App\Tag;
use App\User;
use App\Comment;

class PostController extends Controller
{
    public function index()
    {
      SEOMeta::setTitle('Přehled nových varování');

      $categories = Category::withCount('posts')->orderBy('posts_count', 'desc')->get();
      $archives = Post::selectRaw('count(id) as post_count, year(published_at) year, month(published_at) month')->published()->filter(request()->only(['term', 'year', 'month']))->groupBy('year', 'month')->orderByRaw('min(published_at) desc')->get();
      $tags = Tag::with('posts')->orderBy('name', 'asc')->get();

      $posts = Post::with('author', 'tags', 'category', 'comments')
                         ->latestFirst()
                         ->published()
                         ->filter(request()->only(['term', 'year', 'month']));

      $keyword = request('keyword');

      if($keyword != null){

        $posts->whereHas('author', function($query) use ($keyword){
            $query->where('name', 'LIKE', '%'.$keyword.'%');
        });

        $posts->orWhereHas('category', function($query) use ($keyword){
            $query->where('title', 'LIKE', '%'.$keyword.'%');
        });

        $posts->orWhere('title', 'LIKE', '%'.$keyword.'%');
        $posts->orWhere('excerpt', 'LIKE', '%'.$keyword.'%');
        $posts->orWhere('body', 'LIKE', '%'.$keyword.'%');

      }
      $posts = $posts->paginate(10);

      return view("posts.index", compact('posts', 'categories', 'tags', 'archives'))->render();
    }

    public function show(Post $post){

      $categories = Category::withCount('posts')->orderBy('posts_count', 'desc')->get();
      $tags = Tag::with('posts')->orderBy('name', 'asc')->get();
      $archives = Post::selectRaw('count(id) as post_count, year(published_at) year, month(published_at) month')->published()->filter(request()->only(['term', 'year', 'month']))->groupBy('year', 'month')->orderByRaw('min(published_at) desc')->get();

    //  $numOfViews = $post->views + 1;
    //  $post->update(['views' => $numOfViews]);

      $post->increment('views');

      return view("posts.show", compact('post', 'categories', 'tags', 'archives'));
    }

    public function category($slug){

      $categories = Category::withCount('posts')->orderBy('posts_count', 'desc')->get();
      $tags = Tag::with('posts')->orderBy('name', 'asc')->get();
      $archives = Post::selectRaw('count(id) as post_count, year(published_at) year, month(published_at) month')->published()->filter(request()->only(['term', 'year', 'month']))->groupBy('year', 'month')->orderByRaw('min(published_at) desc')->get();

       // \DB::enableQueryLog();
      $numberOfPosts = 7;

      $posts = Post::orderBy('id', 'desc')
           ->whereHas('category', function ($query) use ($slug) {
               $query->where('slug', 'like', $slug);
           })->paginate(5);

      $categoryName = Category::where('slug', 'like', $slug)->value('title');

      return view("posts.index", compact('posts', 'categories', 'tags', 'archives', 'categoryName'));
      // dd(\DB::enableQueryLog());
    }

    public function author($slug){

       // \DB::enableQueryLog();
      $numberOfPosts = 7;
      $categories = Category::withCount('posts')->orderBy('posts_count', 'desc')->get();
      $tags = Tag::with('posts')->orderBy('name', 'asc')->get();
      $archives = Post::selectRaw('count(id) as post_count, year(published_at) year, month(published_at) month')->published()->filter(request()->only(['term', 'year', 'month']))->groupBy('year', 'month')->orderByRaw('min(published_at) desc')->get();

      $posts = Post::orderBy('id', 'desc')
           ->whereHas('author', function ($query) use ($slug) {
               $query->where('slug', 'like', $slug);
           })->paginate(5);

      $authorName = User::where('slug', 'like', $slug)->value('name');

      return view("posts.index", compact('posts', 'categories', 'tags', 'archives', 'authorName'));
    }

    public function tag($slug){

      $categories = Category::withCount('posts')->orderBy('posts_count', 'desc')->get();

      $tags = Tag::with('posts')->orderBy('name', 'asc')->get();
       // \DB::enableQueryLog();
      $numberOfPosts = 7;
      $archives = Post::selectRaw('count(id) as post_count, year(published_at) year, month(published_at) month')->published()->filter(request()->only(['term', 'year', 'month']))->groupBy('year', 'month')->orderByRaw('min(published_at) desc')->get();
      //$posts = $category->posts()->with('author')->latest()->first()->published()->simplePaginate($numberOfPosts);

      $posts = Post::orderBy('id', 'desc')
           ->whereHas('tags', function ($query) use ($slug) {
               $query->where('slug', 'like', $slug);
           })->paginate(5);

      $tagName = Tag::where('slug', 'like', $slug)->value('name');

      return view("posts.index", compact('posts', 'categories', 'tags', 'archives', 'tagName'));
    }

    public function archive($slug){
      $archives = Post::selectRaw('count(id) as post_count, year(published_at) year, month(published_at) month')->published()->filter(request()->only(['term', 'year', 'month']))->groupBy('year', 'month')->orderByRaw('min(published_at) desc')->get();
      $categories = Category::withCount('posts')->orderBy('posts_count', 'desc')->get();
       // \DB::enableQueryLog();
      $numberOfPosts = 7;
      //$posts = $category->posts()->with('author')->latest()->first()->published()->simplePaginate($numberOfPosts);
      $tags = Tag::with('posts')->orderBy('name', 'asc')->get();

      $posts = Post::orderBy('id', 'desc')
           ->whereHas('tags', function ($query) use ($slug) {
               $query->where('slug', 'like', $slug);
           })->paginate(5);

      return view("posts.index", compact('posts', 'categories', 'tags', 'archives'));
      // dd(\DB::enableQueryLog());
    }

    public function feed(){

      $posts = Post::orderBy('published_at', 'desc')->take(20)->get();
      // return view('posts.feed')->with(compact('posts'));
      return response()->view("posts.feed", compact('posts'), 200)
        ->header('Content-Type', 'application/xml');
    }
}
