<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;


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
/* class Service
{
    public function getdata()
	{
		return 'Dummy Data here';
	}
}
 
Route::get('/', function (Service $service) {
    dd($service::getdata());
}); */
Route::group(["middleware" => ["checkLogin"]], function(){
Route::get('register', [RegisterController::class, 'register']);
Route::post('register', [RegisterController::class, 'store'])->name('register');
Route::get('login', [LoginController::class, 'login']);
Route::post('login', [LoginController::class, 'store'])->name('login');
});
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::group(["middleware" => ["checkUser"]], function(){
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('home', [HomeController::class, 'home'])->name('home');
Route::post('add-tracker', [HomeController::class, 'addTracker'])->name('add-tracker');
Route::post('add-mmr', [HomeController::class, 'addmmr'])->name('add-mmr');
Route::get('add-multi-mmr', [HomeController::class, 'addMultimmr'])->name('add-multi-mmr');
Route::get('add-multi-slp', [HomeController::class, 'addMultiSLP'])->name('add-multi-slp');
Route::post('add-battle', [HomeController::class, 'addBattle'])->name('add-battle');
Route::get('add-multi-battle', [HomeController::class, 'addMultiBattle'])->name('add-multi-battle');
Route::post('edit-tracker', [HomeController::class, 'editTracker'])->name('edit-tracker');
Route::post('update-tracker', [HomeController::class, 'updateTracker'])->name('update-tracker');
Route::post('delete-tracker', [HomeController::class, 'deleteTracker'])->name('delete-tracker');
Route::group(["middleware" => ["cors"]], function(){
Route::get('home/{key}', [HomeController::class, 'search'])->name('search');
Route::get('axies', [HomeController::class, 'axies'])->name('axies');
Route::get('quiz', [QuizController::class, 'quiz'])->name('quiz');
});
Route::post('ajax-data', [HomeController::class, 'ajaxData'])->name('ajax-data');
Route::get('call-daily-slp', [HomeController::class, 'dailySLP'])->name('call-daily-slp');
Route::get('overview', [HomeController::class, 'overview'])->name('overview');

Route::get('update-notification', [HomeController::class, 'updateNotification'])->name('update-notification');
Route::post('add-quiz', [QuizController::class, 'store'])->name('add-quiz');
});

Route::group(["middleware" => ["checkLogin"]], function(){
Route::get('forget-password', [ForgotPasswordController::class, 'getEmail'])->name('forgoot');
Route::post('forget-password', [ForgotPasswordController::class, 'postEmail'])->name('forgotsave');
Route::get('verification', [ForgotPasswordController::class, 'verification'])->name('verification');
Route::post('verifycode', [ForgotPasswordController::class, 'verifycode'])->name('verifycode');
Route::get('verify-code', [RegisterController::class, 'verifyCode'])->name('verify-code');
Route::post('verification-code', [RegisterController::class, 'verificationCode'])->name('verification-code');
Route::get('reset-password', [ResetPasswordController::class, 'getPassword'])->name('resetpass');
Route::post('reset-password', [ResetPasswordController::class, 'updatePassword'])->name('reset-pass');
});
