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

Route::get('/', function () {
    return view('home/accueil');
});
Route::get('/contact', function () {
    return view('home/contact');
});
/*Route::get('contact', function () {
    return view('welcome');
});*/
Route::post('/newsletter', array('uses'=>'NewsletterController@postRegisterMail'));
Route::post('/contact-us', array('uses'=>'ContactController@postRegisterMessage'));

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/blog', 'BlogController@index')->name('blog');
Route::get('/home/blog/add', 'BlogController@create')->name('blogAdd');
Route::post('/home/blog/create', array('uses'=>'BlogController@store'));
Route::get('/home/blog/edit/{id}', 'BlogController@show')->name('blogEdit');

// Evenements
Route::get('/home/evenements', 'EventsController@index')->name('Evenements');
Route::get('/home/evenements/add', 'EventsController@create')->name('EvenementsAdd');
Route::get('/home/evenements/inscription', 'EventsController@inscriptions')->name('EvenementsInscription');
