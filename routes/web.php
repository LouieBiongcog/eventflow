<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Event;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/events', [EventController::class, 'index'])->name('events.index'); 

Route::get('/about', function () {
    return Inertia::render('About/Index');
});

Route::get('/contact', function () {
    return Inertia::render('Contact/Index');
});