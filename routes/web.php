<?php

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

use Illuminate\Http\Request;

Route::get('/theater/{aspect}', 'TheaterController@theater');
Route::get('/festival', 'TheaterController@festival');
Route::get('/studio', 'TheaterController@studio');

Route::get('/workers/{department}', 'WorkerController@index');
Route::get('/worker/{slug}', 'WorkerController@show');

Route::get('/affiches/{month}', 'AfficheController@index');

Route::get('/repertoire/{category}', 'SpectacleController@index');
Route::get('/spectacle/{slug}', 'SpectacleController@show');

Route::redirect('/', '/blog');

Route::get('/blog', 'PostController@index');
Route::get('/post/{slug}', 'PostController@show');

Route::get('/vacancies', 'VacancyController@index');
Route::get('/vacancy/{slug}', 'VacancyController@show');

Route::get('/contact', 'MailController@create');
Route::post('/contact/store', 'MailController@store');


Auth::routes();

Route::get('/admin', 'HomeController@index');

Route::get('/submit', function () {
    return view('submit');
});

Route::post('/submit', function (Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|url|max:255',
        'description' => 'required|max:255',
    ]);

    $link = tap(new App\Link($data))->save();

    return redirect('/');
});
