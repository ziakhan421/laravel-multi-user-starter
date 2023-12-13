<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

// Admin Route
Route::group(['middleware' => ['auth','admin'], 'prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
});

// Company Route
Route::middleware(['auth', 'company'])->group(function () {
    Route::get('/', [AgentController::class, 'AgentDashboard'])->name('company.dashboard');
});

// Company Route
Route::middleware(['auth'])->group(function () {
    Route::get('/', [AgentController::class, 'AgentDashboard'])->name('company.dashboard');
});
