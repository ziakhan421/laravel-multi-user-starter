<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Company\DashboardController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

// Admin Route
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/console', [AdminController::class, 'index'])->name('dashboard');

    Route::group(["prefix" => "users", "as" => "users."], function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::post('/', [UserController::class, 'store'])->name('store');
        Route::get('/{id}', [UserController::class, 'show'])->name('show');
        Route::get('/{id}/update-plan/{plan}', [UserController::class, 'updatePlan'])->name('update-plan');
        Route::delete('/{id}', [UserController::class, 'destroy'])->name('destroy');
        Route::put('/{id}', [UserController::class, 'update'])->name('update');
    });
    Route::group(["prefix" => "notifications", "as" => "notifications."], function () {
        Route::post('/', [NotificationController::class, 'store'])->name('store');
    });
    Route::get('/', function () {
        return redirect('admin/console');
    });
});

// Company Routes
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('company.dashboard');

    Route::group(['middleware' => ['company'],"prefix" => "notifications", "as" => "notifications."], function () {
        Route::get('/', [NotificationController::class, 'index'])->name('index');
        Route::delete('/{ids}', [NotificationController::class, 'destroy'])->name('destroy');
    });
});
