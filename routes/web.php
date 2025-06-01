<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Models\Sensor;
use App\Events\BidPlacedEvent;
use Illuminate\Http\Request;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\DashboardController;


Route::get('/', [DashboardController::class, 'show'])->name('dashboard');

Route::post('/clear-data', [DashboardController::class, 'clearAllData'])->name('dashboard.clear-data'); // Perbaiki nama rute di sini

Route::view('/about', 'about')->name('about');

Route::view('/about', 'about')->name('about');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
