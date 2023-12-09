<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'login']);
Route::get('/auth_login', [AuthController::class, 'auth_login']);

Route::get('/register', [AuthController::class, 'register']);
Route::get('/auth_register', [AuthController::class, 'auth_register']);

Route::get('/verify_email', [AuthController::class, 'verify_email']);
Route::post('/send_verify_email', [AuthController::class, 'send_verify_email']);
