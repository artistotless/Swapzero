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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('swap');
});
Route::get('auth/activate','ActivateEmailController@activate');

Auth::routes();

Route::get('/faq', function () {
    return view('faq');
});
Route::get('/plans', function () {
    return view('plans');
})->name('plans');
Route::get('/crypto', function () {
    return view('crypto');
});
Route::get('/wallet', function () {
    return view('wallet');
});
Route::get('/internation', function () {
    return view('internation');
});

Route::get('/profile', 'ProfileController@index')->name('profile');

Route::get('/stats', 'StatsController@index')->name('stats');


Route::get('/get_captcha/{config?}', function (\Mews\Captcha\Captcha $captcha, $config = 'default') {
    return $captcha->src($config);
});

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
