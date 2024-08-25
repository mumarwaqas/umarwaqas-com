<?php

use App\Http\Controllers\CommandController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});


// Route to list all routes
Route::get('/routes', [CommandController::class, 'routeList'])->name('routes.list');

// Routes for migration commands
Route::get('/migrate', [CommandController::class, 'migrate'])->name('migrate');
Route::get('/migrate/fresh', [CommandController::class, 'migrateFresh'])->name('migrate.fresh');

// Route for seeding database
Route::get('/seed', [CommandController::class, 'seed'])->name('seed');

// Routes for clearing caches
Route::get('/cache/clear', [CommandController::class, 'clearCache'])->name('cache.clear');
Route::get('/cache/clear/all', [CommandController::class, 'clearAllCache'])->name('cache.clear.all');
Route::get('/cache/config', [CommandController::class, 'clearConfigCache'])->name('cache.config.clear');
Route::get('/cache/route', [CommandController::class, 'clearRouteCache'])->name('cache.route.clear');
Route::get('/cache/view', [CommandController::class, 'clearViewCache'])->name('cache.view.clear');

// Routes for caching
Route::get('/cache/config', [CommandController::class, 'cacheConfig'])->name('cache.config');
Route::get('/cache/routes', [CommandController::class, 'cacheRoutes'])->name('cache.routes');
Route::get('/cache/views', [CommandController::class, 'cacheViews'])->name('cache.views');

// Route to get cache status
Route::get('/cache/status', [CommandController::class, 'cacheStatus'])->name('cache.status');


Route::get('/',         [PageController::class, 'home'])->name('home');
Route::get('/about',    [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/work',     [PageController::class, 'work'])->name('work');
Route::get('/blog',     [PageController::class, 'blog'])->name('blog');
Route::get('/contact',  [PageController::class, 'contact'])->name('contact');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
