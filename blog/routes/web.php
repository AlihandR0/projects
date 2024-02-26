<?php

use App\Http\Controllers\Admin\Category\StoreIndexController;
use App\Http\Controllers\Admin\Category\CreteIndexController;
use App\Http\Controllers\Admin\Category\CategoryIndexController;
use App\Http\Controllers\Admin\Main\AdminIndexController as AdminIndexController;
use App\Http\Controllers\Main\MainIndexController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', [MainIndexController::class, '__invoke']);

Route::group(['namespace' => 'Admin\Main'], function (){
    Route::get('/admin', [AdminIndexController::class, '__invoke']);
});
Route::group(['prefix' => 'admin'], function () {
    Route::get('/category', [CategoryIndexController::class, '__invoke'])->name('admin.category.index');
});
Route::group(['prefix' => 'admin'], function () {
    Route::get('/category/create', [CreteIndexController::class, '__invoke'])->name('admin.category.crete');
});
Route::group(['prefix' => 'admin'], function () {
    Route::post('/category/store', [StoreIndexController::class, '__invoke'])->name('admin.category.store');
});

Auth::routes();;
