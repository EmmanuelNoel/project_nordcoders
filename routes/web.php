<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\PostController@index')->name('accueil');
Route::get('/posts/create', 'App\Http\Controllers\PostController@create')->name('post.create');
Route::post('/posts/create',[PostController::class, 'store'])->name('post.store');

Route::get('/posts/{id}', 'App\Http\Controllers\PostController@show')->name('post.show');


Route::get('/contact', 'App\Http\Controllers\PostController@contact')->name('contact');


Route::get('/register', [PostController::class, 'register']);


/*Route::get('post', function() {
    return response()->json([
        'title' => 'NordCorders',
        'description' => 'Ma description'
    ]);
});

Route::get('/articles', function () {
    return view('articles');
});*/
