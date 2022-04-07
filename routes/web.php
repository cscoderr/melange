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

Route::get('/', 'App\Http\Controllers\HomeController@frontend');

Route::get('/about-us', 'App\Http\Controllers\HomeController@about');

Route::get('/service', 'App\Http\Controllers\HomeController@service');

Route::get('/job-search', 'App\Http\Controllers\HomeController@job');

Route::get('/job-modal/{hid}', 'App\Http\Controllers\HomeController@jobModal');

Route::get('/contact-us', 'App\Http\Controllers\HomeController@contact');

Route::get('/privacy-policy', 'App\Http\Controllers\HomeController@privacy');

Route::get('/our-team', 'App\Http\Controllers\HomeController@team');

Route::get('/get-hired', 'App\Http\Controllers\HomeController@frontend');

Route::get('/employers', 'App\Http\Controllers\HomeController@employers');

Route::get('/login', 'App\Http\Controllers\Auth\LoginController@index');

Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');

Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@index');

Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register');

Route::get('/courier/register', 'App\Http\Controllers\Auth\RegisterController@courier');

Route::post('/courier/register', 'App\Http\Controllers\Auth\RegisterController@courierRegister');

Route::get('/courier/completed', 'App\Http\Controllers\Auth\RegisterController@courierCompleted');

Route::get('/register-opt', 'App\Http\Controllers\Auth\RegisterController@registerType');

Route::post('/register/option', 'App\Http\Controllers\Auth\RegisterController@registerOption');

Route::get('/quote', 'App\Http\Controllers\Auth\RegisterController@quote');

Route::post('/logout', 'App\Http\Controllers\HomeController@logout');

Route::middleware('authenticate')->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\HomeController@index');

    Route::get('/user/list', 'App\Http\Controllers\UserController@list');

    Route::get('/courier/list', 'App\Http\Controllers\CourierController@list');

    Route::get('/courier/verified', 'App\Http\Controllers\CourierController@verified');

    Route::get('/courier/un-verified', 'App\Http\Controllers\CourierController@unverified');

    Route::get('/courier/verify/{id}', 'App\Http\Controllers\CourierController@verify');

    Route::get('/profile/edit', 'App\Http\Controllers\ProfileController@show');

    Route::get('/profile/password/change', 'App\Http\Controllers\ProfileController@change_password');

    Route::post('/profile/edit', 'App\Http\Controllers\ProfileController@updateProfile');

    Route::get('/job/post', 'App\Http\Controllers\JobController@show');

    Route::post('/job/post', 'App\Http\Controllers\JobController@addJob');

    Route::get('/job/list', 'App\Http\Controllers\JobController@listAll');

});
