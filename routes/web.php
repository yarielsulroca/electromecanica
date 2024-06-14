<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WorkorderController;
use App\Http\Controllers\WorkerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
    764
    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/workorders.chart', [WorkorderController::class,'workordersByClient'])->name('workorders.chart');

    Route::resource('clients', ClientController::class);
    Route::resource('workorders', WorkorderController::class);
    Route::resource('workers', WorkerController::class);

    Route::get('/inicio',[ClientController::class, 'inicio'])->name('inicio.index');
    Route::get('/inicio/{id}', [ClientController::class, 'inicioShow'])->name('clientes.show');

});

require __DIR__.'/auth.php';
