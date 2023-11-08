<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;


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
    $title = 'Login Page';
    $slug = 'dashboard';
    return view('layoutadmin.dashboard', compact('title', 'slug'));
});

Route::get('/dashboard', function () {
    $title = 'Dashboard';
    $slug = 'dashboard';
    return view('layoutadmin.dashboard', compact('title', 'slug'));
});

Route::get('/mahasiswa', [mahasiswaController::class, 'index']);
Route::get('/mahasiswa/create', [mahasiswaController::class, 'create']);
Route::post('/mahasiswa/store', [mahasiswaController::class, 'store']);
Route::get('/mahasiswa/edit{id}', [mahasiswaController::class, 'edit']);
Route::post('/mahasiswa/update{id}', [mahasiswaController::class, 'update']);
Route::get('/mahasiswa/destroy{id}', [mahasiswaController::class, 'destroy']);
