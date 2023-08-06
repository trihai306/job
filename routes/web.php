<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/account', [\App\Http\Controllers\HomeController::class, 'account'])->name('account');
    Route::get('/mission', [\App\Http\Controllers\HomeController::class, 'mission'])->name('mission');
    Route::get('/get-mission', [\App\Http\Controllers\MissionController::class, 'getMission'])->name('get-mission');
    Route::get('/banking', [\App\Http\Controllers\HomeController::class, 'banking'])->name('banking');
    Route::get('/recharge', [\App\Http\Controllers\HomeController::class, 'recharge'])->name('recharge');
    Route::get('/moneyout', [\App\Http\Controllers\HomeController::class, 'moneyout'])->name('moneyout');
    Route::get('/order', [\App\Http\Controllers\HomeController::class, 'order'])->name('order');
    Route::post('/send-order/{id}', [\App\Http\Controllers\OrderController::class, 'sendOrder'])->name('send-order');
    Route::post('/update-user', [UserController::class, 'update'])->name('user.update');
    Route::post('recharge', [UserController::class, 'historyPayment']);
    Route::get('/rechargeoption', [\App\Http\Controllers\HomeController::class, 'rechargeoption'])->name('rechargeoption');
    # deposit money
    Route::get('/history-deposit', [\App\Http\Controllers\HistoryPayment::class, 'deposit'])->name('history-deposit');
    # withdraw money
    Route::get('/history-withdraw', [\App\Http\Controllers\HistoryPayment::class, 'withDraw'])->name('history-withdraw');
});
