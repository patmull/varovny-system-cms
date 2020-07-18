<?php
use Spatie\Sitemap\SitemapGenerator;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/feed', 'PostController@feed');

Route::get('/sitemap', function() {
  return response(file_get_contents(public_path('sitemap.xml')), 200, [
        'Content-Type' => 'application/xml'
    ]);
});

/*
Route::get('/sitemap', function() {
  SitemapGenerator::create('http://localhost:8000/')->writeToFile(public_path('sitemap.xml'));
});
*/

Route::get('/', [
    'uses' => 'PostController@index',
    'as' => 'posts'
]);

Route::get('/warnings/{post}', [
    'uses' => 'PostController@show',
    'as' => 'posts.show'
]);

Route::post('/warnings/{post}/comments', [
  'uses' => 'CommentsController@store',
  'as' => 'posts.comments'
]);

Route::get('/varovani/{post}', [
    'uses' => 'PostController@show',
    'as' => 'posts.show'
]);

Route::post('/varovani/{post}/comments', [
  'uses' => 'CommentsController@store',
  'as' => 'posts.comments'
]);

Route::get('/category/{category}', [
  'uses' => 'PostController@category',
  'as' => 'category'
]);

Route::get('/kategorie/{category}', [
  'uses' => 'PostController@category',
  'as' => 'category'
]);

Route::get('/author/{author}', [
  'uses' => 'PostController@author',
  'as' => 'author'
]);

Route::get('/autor/{author}', [
  'uses' => 'PostController@author',
  'as' => 'author'
]);

Route::get('/tag/{tag}', [
  'uses' => 'PostController@tag',
  'as' => 'tag'
]);

Route::get('/be-warned', function(){
  return view('layouts.standalone-pages.be-warned');
})->name('be-warned');

Route::get('/bud-varovan', function(){
  return view('layouts.standalone-pages.be-warned');
})->name('be-warned');

Route::get('/about', function(){
  return view('layouts.standalone-pages.about');
})->name('about');

Route::get('/o-nas', function(){
  return view('layouts.standalone-pages.about');
})->name('about');

Route::get('/contact', function(){
  return view('layouts.standalone-pages.contact');
})->name('contact');

Route::get('/kontakt', function(){
  return view('layouts.standalone-pages.contact');
})->name('contact');

Route::get('/faq', function(){
  return view('layouts.standalone-pages.faq');
})->name('faq');

Route::get('/katastrofy', function(){
  return view('layouts.standalone-pages.disasters');
})->name('disasters');

Route::get('/disasters', function(){
  return view('layouts.standalone-pages.disasters');
})->name('disasters');

Auth::routes();

Route::name('administration.')->namespace('Administration')->middleware(['auth'])->group(function () {
    Route::resource('/administration/users', 'UsersController');
    Route::resource('/administration/posts', 'PostsController');
    Route::resource('/administration/categories', 'CategoriesController');
});

Route::get('/home', 'Administration\HomeController@index')->name('home');
Route::get('/edit-account', 'Administration\HomeController@edit')->name('edit-account');
Route::put('/edit-account', 'Administration\HomeController@update')->name('update-account');


Route::put('/administration/posts/restore/{slug}', [
  'uses' => 'Administration\PostsController@restore',
  'as' => 'administration.posts.restore'
]);

Route::delete('/administration/posts/force-destroy/{slug}', [
  'uses' => 'Administration\PostsController@forceDestroy',
  'as' => 'administration.posts.force-destroy'
]);

Route::get('/administration/users/confirm-delete/{user}', [
  'uses' => 'Administration\UsersController@confirm',
  'as' => 'administration.users.confirm'
]);

Route::get('/login/facebook', 'Auth\LoginController@redirectToFacebookProvider');

Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderFacebookCallback');

Route::group(['middleware' => [
    'auth'
]], function(){

    Route::post('/page', 'GraphController@publishToPage');
});
