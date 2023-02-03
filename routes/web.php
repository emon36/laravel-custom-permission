<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProductController;
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
Route::middleware(['auth'])->get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/add/permissions' ,[PermissionController::class, 'create'])->name('addPermission');

Route::post('/store/permissions' ,[PermissionController::class, 'store'])->name('storePermission');

Route::get('/create/product' , [ProductController::class, 'create'])->name('addProduct')
    ->middleware('checkPermission:CREATE_PRODUCT');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
