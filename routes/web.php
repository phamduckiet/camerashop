<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/1112', function () {
//     return view('admin.page.theloai.themmoi');
// });

Route::get('/admin/theloai', [\App\Http\Controllers\TheloaiController::class, 'createtheloai'])->name('theloai.Create');
Route::post('/admin/theloai', [\App\Http\Controllers\TheloaiController::class, 'posttheloai'])->name('theloai.post');
