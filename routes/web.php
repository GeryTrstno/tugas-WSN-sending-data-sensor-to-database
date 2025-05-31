<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Models\Sensor;
use App\Events\BidPlacedEvent;
use Illuminate\Http\Request;
use App\Http\Controllers\SensorController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/monitoring', function () {
    $data = Sensor::latest()->take(10)->get();
    return view('monitoring', compact('data'));
});

Route::post('/bid', function (Request $request) {
    BidPlacedEvent::dispatch($request->user, $request->bid);
});

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
