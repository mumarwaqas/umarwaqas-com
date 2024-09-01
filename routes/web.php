<?php

use App\Http\Controllers\CommandController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/routelist',        [CommandController::class, 'routeList']);

Route::get('/migrate',          [CommandController::class, 'migrate']);
Route::get('/migrate/install',  [CommandController::class, 'migrateInstall']);
Route::get('/migrate/fresh',    [CommandController::class, 'migrateFresh']);
Route::get('/migrate/rollback', [CommandController::class, 'migrateRllback']);

Route::get('/writer/seed',      [CommandController::class, 'writerSeed']);
Route::get('/order/seed',       [CommandController::class, 'orderSeeder']);
Route::get('/seed',             [CommandController::class, 'seed']);

Route::get('/clear/all/cache',  [CommandController::class, 'clearAllCache']);

Route::get('/clear/cache',      [CommandController::class, 'clearCache']);
Route::get('/clear/config/cache', [CommandController::class, 'clearConfigCache']);
Route::get('/clear/route/cache',[CommandController::class, 'clearRouteCache']);
Route::get('/clear/view/cache', [CommandController::class, 'clearViewCache']);
Route::get('/cache/config',     [CommandController::class, 'cacheConfig']);
Route::get('/cache/routes',     [CommandController::class, 'cacheRoutes']);
Route::get('/cache/views',      [CommandController::class, 'cacheViews']);
Route::get('/cache/status',     [CommandController::class, 'cacheStatus']);


Route::get('/export-meta-data', [PageController::class, 'exportMetaData']);


Route::get('/',         [PageController::class, 'home'])->name('home');
Route::get('/about',    [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/work',     [PageController::class, 'work'])->name('work');
Route::get('/blog',     [PageController::class, 'blog'])->name('blog');
Route::get('/contact',  [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'store'])->name('contact.store');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
