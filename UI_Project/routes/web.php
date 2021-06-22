<?php
use App\Mail\VerifyMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', 'App\Http\Controllers\RegisterController@register');

Route::get('/hello', 'App\Http\Controllers\HelloController@index');
Route::get('/register', 'App\Http\Controllers\RegisterController@register');
Route::get('/thankyou', 'App\Http\Controllers\RegisterController@thankyou');
Route::get('/login', 'App\Http\Controllers\RegisterController@login');
Route::get('/home', 'App\Http\Controllers\RegisterController@home');
Route::post('/account', 'App\Http\Controllers\RegisterController@store');
// Route::get('/email', function(){
//     Mail::to('email@email.com')->send(new VerifyMail());
//     return new VerifyMail();
// });
// Route::get('/login/{account_name}', 'App\Http\Controllers\RegisterController@login');