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
    

/*   SWAP API   */
Route::post('api/qiwihook', 'Api\QiwiController@index');
Route::post('api/yandexhook', 'Api\YandexController@index');
Route::post('api/webmoneyhook', 'Api\WebmoneyController@index');


Route::get('/myprofile', 'ProfileController@myprofile')->name('myprofile');

Route::post('/applysettings', 'ProfileController@settings')->name('applysettings');

Route::get('/settings', 'ProfileController@settings')->name('settings');

Route::get('/stats', 'StatsController@index')->name('stats');

Route::post('/swapstart', 'Swap\SwapController@step1')->name('swapstart'); 

Route::post('/swapend',   'Swap\SwapController@step2')->name('swapend'); 

Route::get('/get_captcha/{config?}', function (\Mews\Captcha\Captcha $captcha, $config = 'default') {
    return $captcha->src($config);
});

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
