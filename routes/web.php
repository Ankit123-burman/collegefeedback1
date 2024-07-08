<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;

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

Route::get('UserFeedBack/Home',[usercontroller::class,'HOME'])->name('UserFeedBack/Home');
Route::get('UserFeedBack/about',[usercontroller::class,'ABOUT']);

Route::get('UserFeedBack/feedback',[usercontroller::class,'FEEDBACK']);
Route::post('UserFeedBack/feedback',[usercontroller::class,'store'])->name('UserFeedBack/feedback');

Route::get('UserFeedBack/Login',[usercontroller::class,'LOGIN']);
Route::post('UserFeedBack/Login',[usercontroller::class,'checklogin'])->name('UserFeedBack/Login');

Route::get('signout', [usercontroller::class, 'signOut'])->name('signout');

Route::get('UserFeedBack/register',[usercontroller::class,'REGISTER']);
Route::post('UserFeedBack/register',[usercontroller::class,'registercheck'])->name('UserFeedBack/register');

Route::get('UserFeedBack/thanku',[usercontroller::class,'THANKU']);
Route::get('UserFeedBack/contectus',[usercontroller::class,'CONTECTUS']);

Route::get('UserFeedBack/adminlog',[usercontroller::class,'ADMIN'])->name('UserFeedBack/adminlog');

Route::get('UserFeedBack/adminlog',[usercontroller::class,'adminstore']);
Route::get('UserFeedBack/Dashboard',[usercontroller::class,'DASHBOARD'])->name('UserFeedBack/Dashboard');

