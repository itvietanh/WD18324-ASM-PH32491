<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\DashBoardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\client\HomeController;

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

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
], function() {
    Route::get('dashboard', [DashBoardController::class, 'handlerDashBoard'])->name('home');
});

Route::group([
    'prefix' => 'client',
    'as' => 'client.'
], function() {
    Route::get('home', [HomeController::class, 'handlerHomeClient'])->name('home');
});

Route::group([
    'prefix' => 'auth',
    'as' => 'auth.'
], function() {
    Route::get('login', [AuthController::class, 'handlerAuth'])->name('login');
    Route::post('verify', [AuthController::class, 'handlerVerify'])->name('verify');
    Route::get('logout', [AuthController::class, 'handlerLogout'])->name('logout');

});

Route::get('/', function () {
    return view('welcome');
});
