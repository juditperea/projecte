<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*

//ejemplo de ruta protegida por el middleware
Route::get('/admin/dashboard', function () {
    return view('dashboard.admin');
})->middleware('checkrole:admin');

//rol
Route::get('/admin/dashboard', function () {
})->middleware(['auth', 'role:admin']);

//permiso

Route::get('/admin/dashboard', function () {
    // Contenido del dashboard administrativo
})->middleware('permission:view dashboard');

*/
require __DIR__.'/auth.php';
