<?php

use App\Http\Controllers\RoleController;
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

Route::get('/', [RoleController::class, 'index'])->name('role.index');

Route::prefix('/Role')->group(function(){

    Route::get('/Create', [RoleController::class, 'create'])->name('role.create');

    Route::post('/Store', [RoleController::class, 'store'])->name('role.store');

    Route::delete('/{role}/Delete', [RoleController::class, 'destroy'])->name('role.delete');

    Route::get('/{role}/Update', [RoleController::class, 'update'])->name('role.update.page');

    Route::put('/{role}/Edit', [RoleController::class, 'change'])->name('role.update.handle');
});

