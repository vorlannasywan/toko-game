<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PurchaseController;


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

Route::redirect('/', '/login');
Route::get('/homegame', [GameController::class, 'homegame'])->name('homegame');
Route::get('/game', [GameController::class, 'index'])->name('game'); 
Route::get('/game/{id}', [GameController::class, 'showgame'])->name('showgame');
Route::post('/purchase', [PurchaseController::class, 'store'])->name('purchasestore');


Route::get('/tambahgame', [GameController::class, 'tambahgame'])->name('tambahgame'); 
Route::post('/insertgame', [GameController::class, 'insertgame'])->name('insertgame');
Route::get('/tampildata/{id}', [GameController::class, 'tampildata'])->name('tampildata');
Route::post('/updatedata/{id}', [GameController::class, 'updatedata'])->name('updatedata');
Route::get('/deletegame/{id}', [GameController::class, 'deletegame'])->name('deletegame');  

Route::get('/login', [LoginController::class, 'login'])->name('login');  
Route::post('/loginuser', [LoginController::class, 'loginuser'])->name('loginuser');  

Route::get('/register', [LoginController::class, 'register'])->name('register');  

Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');  

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');  
