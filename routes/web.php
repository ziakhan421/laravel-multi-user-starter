<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AgentController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

// Admin Route
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/console', [AdminController::class, 'index'])->name('dashboard');

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
    Route::delete('/users/{id}', [UserController::class, 'delete'])->name('users.destroy');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
});

// Company Route
Route::middleware(['auth', 'company'])->group(function () {
    Route::get('/', [AgentController::class, 'AgentDashboard'])->name('company.dashboard');
});

// User Route
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/', [AgentController::class, 'AgentDashboard'])->name('company.dashboard');
});
