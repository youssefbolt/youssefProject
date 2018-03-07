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
    return view('welcome');
});


Route::get('/contact', function () {
    return view('est.contact');
});




Route::get('/services', function () {
    return view('services');
});




Route::get('/create', function () {
    return view('create');
})->middleware('auth');



Route::get('/cmpcreate', function () {
    return view('cmpcreate');
})->middleware('bini');








Route::get('/registerbini', function () {
    return view('auth.registerbini');
});



















Route::get('/send', 'ContactController@send');




Route::get('/home', 'UserController@indexuser');

Route::get('/indexusers/{id}', 'UserController@indexusers');
Route::get('/watch/{id}', 'WatchController@watch');
Route::get('/edite/{id}', 'UserController@edite');
Route::get('acch', 'siteController@acch');
Route::post('sss', 'siteController@sss');
Route::get('/profile', 'UserController@profile');
Route::post('/updateUser', 'UserController@updateUser');
Route::post('/hhh', 'UserController@filtre');
Route::post('/filtre', 'UserController@filre');
Route::get('/sup/{id}', 'UserController@sup');
Route::get('/delete/{id}', 'UserController@delete');
Route::post('/store', 'UserController@store');
Route::post('/update/{id}', 'UserController@update');
Route::post('/contacts', 'ContactController@contact');

Route::get('/deletevalidation/{id}', 'UserController@indexsup');
Route::get('/cmpdeletevalidation/{id}', 'SiteController@indexsup');
Route::get('/cmpdelete/{id}', 'SiteController@delete');
Route::get('/cmpedite/{id}','SiteController@edite');
Route::post('cmpupdate/{id}', 'siteController@update');


Route::group(['prefix' => 'bini'], function () {
  Route::get('/login', 'BiniAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'BiniAuth\LoginController@login');
  Route::get('/logout', 'BiniAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'BiniAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'BiniAuth\RegisterController@register');

  Route::post('/password/email', 'BiniAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'BiniAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'BiniAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'BiniAuth\ResetPasswordController@showResetForm');
});



 Route::get('/trans/{id}', 'SiteController@trans');




 Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
        Route::post('login', 'Auth\LoginController@login');
         Route::get('logout', 'Auth\LoginController@logout')->name('logout');

        // Registration Routes...
        Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'Auth\RegisterController@register');

        // Password Reset Routes...
        Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
         Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
       Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('password/reset', 'Auth\ResetPasswordController@reset');



        
        Route::get('/cmp', 'SiteController@indexcmp');
  Route::post('/cmpstore', 'SiteController@store');
  Route::post('/filtrhamalat', 'SiteController@filtrhamalat');



       
        
