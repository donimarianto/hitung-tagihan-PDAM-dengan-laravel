<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TagihanController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/tes', function () {
//     return view('Hello-World');
// });
// Route::get('halaman1',[HomeController::class,'halaman1'])->name('halaman1');
// Route::get('user',[UserController::class,'user'])->name('user');
// Route::get('cek_plat/{angka}',[UserController::class,'cek_plat'])->name('cek_plat');

// Route::get('form_angka',[UserController::class,'form_angka'])->name('form_angka');
// Route::POST('form_action',[UserController::class,'form_action'])->name('form_action');

// Route::get('hitung',[UserController::class,'hitung'])->name('hitung');

// Route::get('/calculate-bill/{id}', [Controller::class, 'calculateBill']);

// Route::get('/calculate-bill', [TagihanController::class, 'showBillForm']);
// Route::post('/calculate-bill', [TagihanController::class, 'calculateBill']);

// Route::get('/folderbaru', [UserController::class, 'tagihan']) ->name ('folderbaru.tagihan');
// Route::post('/folderbaru/hitungTagihan', [UserController::class, 'hitungTagihan']) ->name ('folderbaru.hitungTagihan');

Route::get('/calculate-bill', [TagihanController::class, 'calculateBill']);

Route::get('/pdam-form', function () {
    return view('from');
});
