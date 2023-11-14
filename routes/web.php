<?php

use App\Http\Controllers\HomeController;
use App\Http\Livewire\JobRequests\Create\CreateJobRequest;
use App\Http\Livewire\JobRequests\ListJobRequest;
use Illuminate\Support\Facades\Route;

// Rutas públicas (sin autenticación requerida)

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/policy', [HomeController::class, 'policy'])->name('policy');
Route::get('/terms', [HomeController::class, 'terms'])->name('terms');

// Ruta para la creación de solicitudes de trabajo.
// Esta ruta permite la visualización de las vistas que capturan de la necesidad del usuario.

Route::get('job-requests/create/', CreateJobRequest::class)->name('create-job-request');

// Rutas para usuarios autenticados
Route::middleware(['auth'])->group(function () {
    // Rutas para el dashboard
    Route::get('/dashboard', function () {
        return view('home.home');
    })->name('dashboard');

    Route::get('job-requests/list-job-request/', ListJobRequest::class)->name('list-job-request');

});
