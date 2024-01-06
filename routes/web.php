<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PHPMailerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/data-succsess', function () {
    return view('data-succsess');
});

Route::get('/index', [HomeController::class, 'index']);
Route::get('/search', [HomeController::class, 'search']);
Route::get('/detail_project', [HomeController::class, 'detail_project']);
Route::get('/profile', [HomeController::class, 'profile']);
Route::get('/profiles', [HomeController::class, 'profiles']);

Route::get('/login', [AuthController::class, 'login']);
Route::get('/login/google', [AuthController::class, 'login_google']);
Route::get('/login/google/callback', [AuthController::class, 'auth_google']);
Route::post('/auth_login', [AuthController::class, 'auth_login']);

Route::get('/register', [AuthController::class, 'register']);
Route::post('/auth_register', [AuthController::class, 'auth_register']);

Route::get('/verify_email', [AuthController::class, 'verify_email']);
Route::post('/send_verify_email', [PHPMailerController::class, 'composeEmail']);

Route::post('/activated_user', [AuthController::class, 'activated_user'])->name('activated_user');

Route::get('/changepassword', [AuthController::class, 'changepassword']);
Route::get('/confirm_email_pw', [AuthController::class, 'confirm_email_pw']);
Route::post('/send_confirm_email_pw', [AuthController::class, 'send_confirm_email_pw']);

Route::post('/update_password', [AuthController::class, 'update_password']);
