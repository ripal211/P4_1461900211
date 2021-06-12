<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller0211;
use App\Http\Controllers\UsersExport;
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
Route::get('buku0211', [Controller0211::class,'buku']);
Route::get('buku0211/cari', [Controller0211::class,'cari']);
Route::get('jenisbuku0211', [Controller0211::class,'jenisbuku']);
Route::get('rakbuku0211', [Controller0211::class,'rakbuku']);
Route::get('home0211', [Controller0211::class,'home']);
Route::get('export0211', [Controller0211::class, 'export']);