<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Post;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){

      view()->composer('layouts.sidemenu', function ($views) {
         $mostViewedPosts = Post::published()->popular()->take(3)->get();
         return $views->with('mostViewedPosts', $mostViewedPosts);
     });

     view()->composer('layouts.sidemenu-mini', function ($views) {
        $mostViewedPosts = Post::published()->popular()->take(3)->get();
        return $views->with('mostViewedPosts', $mostViewedPosts);
    });

  }

}
