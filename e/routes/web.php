<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
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

Route::get('/', function () {
    toastr()->success('Success fully data fatched');
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::group(['as' => 'admin.', 'prefix' => 'admin'], function () {
    Route::get('/', [dashboardController::class, 'index'])->name('index');
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
    Route::get('/home', [dashboardController::class, 'index'])->name('home');

    // permission management
    Route::resource('/permission', PermissionController::class)->names('permission');
    Route::get('/permission/delete/{id}', [PermissionController::class, 'delete'])->name('permission.delete');


    Route::get('/settings/{slug}/{key}', [SettingController::class, 'index'])->name('setting.index');
    Route::get('/settings/{slug}/{key}/group', [SettingController::class, 'index_group'])->name('setting.index_group');

});





Route::any('setting-store-update', [SettingController::class, 'store'])->name('setting.store.update');

