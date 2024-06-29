<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InventarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
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

// Ruta vista inventario
Route::get('inventario', [InventarioController::class, 'getVista'])->middleware(['auth', 'verified'])->name('inventario');
// Ruta obtener inventario
Route::get('/getInventario', [InventarioController::class, 'getInventario'])->middleware(['auth', 'verified'])->name('getInventario');
// Ruta vista agregar inventario
Route::get('/addInventario', [InventarioController::class, 'addInventario'])->middleware(['auth', 'verified'])->name('addInventario');
// Ruta guardar producto en inventario
Route::post('/storeInventario', [InventarioController::class, 'storeInventario'])->middleware(['auth', 'verified'])->name('storeInventario');
// Ruta vista editar inventario
Route::get('/editInventario/{id}', [InventarioController::class, 'editInventario'])->middleware(['auth', 'verified'])->name('editInventario');
// Ruta guardar producto en inventario
Route::put('/updateInventario/{id}', [InventarioController::class, 'updateInventario'])->middleware(['auth', 'verified'])->name('updateInventario');
// Ruta eliminar inventario
Route::get('/deleteInventario', [InventarioController::class, 'deleteInventario'])->middleware(['auth', 'verified'])->name('deleteInventario');


require __DIR__.'/auth.php';
