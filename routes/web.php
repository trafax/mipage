<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
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


Auth::routes();

Route::any('{slug}', [App\Http\Controllers\PageController::class, 'page'])->name('page');
Route::get('/', [App\Http\Controllers\PageController::class, 'home'])->name('home');

Route::get('admin', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);

Route::post('admin/page/sort', [App\Http\Controllers\Admin\PageController::class, 'sort'])->name('page.sort');
Route::get('admin/page/{page}/destroy', [App\Http\Controllers\Admin\PageController::class, 'destroy'])->name('page.destroy');
Route::resource('admin/page', App\Http\Controllers\Admin\PageController::class)->except('destroy');

Route::get('profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
Route::put('profile/update', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
