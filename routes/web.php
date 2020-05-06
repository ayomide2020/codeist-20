<?php

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

Route::get('/', function () {
    return view('welcome');
});

// To return Auth User
Route::get('/user', function () {
    return Auth::user();
});


// Question Routes
Route::get('/question', 'QuestionController@create');
Route::get('/questions', 'QuestionController@index');
Route::post('/question', 'QuestionController@store');
Route::get('/question/{question}', 'QuestionController@show');


// Tags Routes
Route::get('/tags', 'TagController@index');
Route::get('/tag', 'TagController@create');
Route::post('/tags', 'TagController@store');

// Job Routes
Route::get('/jobs', 'JobController@index');
Route::get('/job', 'JobController@create');
Route::get('/jobs', 'JobController@store');




// Article/Post Routes
Route::get('/posts/randomfive', 'Studio\PostController@showfivePosts');

// Answer Routes
Route::post('/answer', 'AnswerController@store');

// Vote Routes
Route::post('/vote', 'VoteController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Studio')->prefix(config('studio.path'))->group(function () {
    Route::prefix('api')->group(function () {
        Route::prefix('posts')->group(function () {
            Route::get('/', 'PostController@index');
            Route::get('{identifier}/{slug}', 'PostController@show')->middleware('Canvas\Http\Middleware\Session');
        });

        Route::prefix('tags')->group(function () {
            Route::get('/', 'TagController@index');
            Route::get('{slug}', 'TagController@show');
        });

        Route::prefix('topics')->group(function () {
            Route::get('/', 'TopicController@index');
            Route::get('{slug}', 'TopicController@show');
        });

        Route::prefix('users')->group(function () {
            Route::get('{identifier}', 'UserController@show');
        });
    });

    Route::get('/{view?}', 'ViewController')->where('view', '(.*)')->name('studio');
});
