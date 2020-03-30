<?php

use Illuminate\Support\Facades\Route;
use App\User;

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

Route::get('test1', function () {
    //$user = User::find(1);
    //return $user->posts;
    //$post = \App\Post::find(500);
    //$post = \App\Post::paginate();

    //return $post->comments;

    //$cat = \App\Category::find(4);

    //return json_encode($cat->posts);

    //$comment = \App\Comments::find(400);

    //return $comment->post;

    //return new \App\Http\Resources\PostResource($post);
    //return new \App\Http\Resources\PostsResource($post);

    return new \App\Http\Resources\CategoriesResource(\App\Category::paginate());



});

//Route::get('test', 'CategoryController@index');



Route::middleware(['auth'])->group( function (){

    Route::get('categories', 'CategoryController@index');
    Route::get('categories/{id}', 'CategoryController@show');
    Route::post('categories', 'CategoryController@store')->name('save-category');

    Route::get('tags', 'TagController@index');
    Route::post('tags', 'TagController@store')->name('save-tag');

    Route::get('/', function () {
        return view('welcome');
    });

});


Auth::routes(['verify' => true]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
