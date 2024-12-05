<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReporteController;
use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\GestionarTablasController;
use App\Http\Controllers\CustomVoyagerController;
Route::get('/', function () {
    return redirect()->route('voyager.login');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});
 // Sobrescribir la ruta del controlador de usuarios
Route::put('users/{id}', [UserController::class, 'update'])->name('voyager.users.update');
//Route::get('admin/users', [UserController::class, 'index'])->name('admin.index');

require __DIR__.'/auth.php';

//reportes
Route::get('admin/reporte-pdf/{slug}', [ReporteController::class, 'generatePdf'])->name('reporte.pdf');

//procedencia

Route::get('/gestionar/{slug}', [GestionarTablasController::class, 'gestionar'])->name('gestionar.tabla');
Route::get('/admin/{slug}', [CustomVoyagerController::class, 'index'])->name('voyager.index');

