<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BayuController;

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

Route::get('/bayu',[BayuController::class, 'index'])->name('bayu');
Route::get('/tambahbayu',[BayuController::class, 'tambahbayu'])->name('tambahbayu');
Route::post('/insertdata',[BayuController::class, 'insertdata'])->name('insertdata');
Route::get('/tampildata/{id}',[BayuController::class, 'tampildata'])->name('tampildata');
Route::post('/updatedata/{id}',[BayuController::class, 'updatedata'])->name('updatedata');
Route::get('/delete/{id}',[BayuController::class, 'delete'])->name('delete');