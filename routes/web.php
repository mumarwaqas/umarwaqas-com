<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\PostsController;

use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\WritersController;
use App\Http\Controllers\Admin\SamplesController;
use App\Http\Controllers\Admin\CustomersController;
<<<<<<< HEAD

<<<<<<< HEAD
=======
>>>>>>> parent of ee563be (Latest)

=======
>>>>>>> parent of fc9fe7c (Latest)
use App\Http\Controllers\Admin\PagesController;

use App\Http\Controllers\OrderController;
use App\Http\Controllers\WebPageController;
use App\Http\Controllers\CommandController;
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


Route::get('/export-meta-data', [WebPageController::class, 'exportMetaData']);


Route::get('/',         [WebPageController::class, 'home'])->name('home');
Route::get('/about',    [WebPageController::class, 'about'])->name('about');
Route::get('/services', [WebPageController::class, 'services'])->name('services');
Route::get('/work',     [WebPageController::class, 'work'])->name('work');
Route::get('/contact',  [WebPageController::class, 'contact'])->name('contact');
Route::post('/contact', [WebPageController::class, 'store'])->name('contact.store');

Route::get('/blog',     [WebPageController::class, 'posts'])->name('posts');
Route::get('/blogs',    [WebPageController::class, 'posts'])->name('posts');
Route::get('/blog/{slug}', [WebPageController::class, 'post'])->name('post');

Route::get('/category/{slug}', [WebPageController::class, 'category'])->name('category');
Route::get('/author/{slug}', [WebPageController::class, 'author'])->name('author');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // Categories
    Route::resource("/categories", CategoriesController::class)
        ->names([
            'index' => 'category.index',
            'create' => 'category.create',
            'store' => 'category.store',
            'show' => 'category.show',
            'edit' => 'category.edit',
            'update' => 'category.update',
            'destroy' => 'category.destroy'
        ]);

    // Posts
    Route::resource("/posts", PostsController::class)
        ->names([
            'index' => 'post.index',
            'create' => 'post.create',
            'store' => 'post.store',
            'show' => 'post.show',
            'edit' => 'post.edit',
            'update' => 'post.update',
            'destroy' => 'post.destroy'
        ]);


    // Pages
    Route::get('/pages',            [PagesController::class, 'index'])->name('pages.index');
    Route::get('/pages/add',        [PagesController::class, 'create'])->name('pages.add');
    Route::get('/pages/edit/{id}',  [PagesController::class, 'edit'])->name('pages.edit');
    Route::get('/pages/show/{id}',  [PagesController::class, 'show'])->name('pages.show');

    Route::post('/pages',           [PagesController::class, 'store'])->name('pages.store');
    Route::put('/pages/{id}',       [PagesController::class, 'update'])->name('pages.update');
    Route::delete('/pages/{page}',  [PagesController::class, 'destroy'])->name('pages.destroy')->withTrashed();

    // Orders
    Route::get('/orders',            [OrdersController::class, 'index'])->name('orders.index');
    Route::get('/orders/edit/{id}',  [OrdersController::class, 'edit'])->name('orders.edit');
    Route::get('/orders/show/{id}',  [OrdersController::class, 'show'])->name('orders.show');

    Route::put('/orders/{id}',       [OrdersController::class, 'update'])->name('orders.update');
    Route::delete('/orders/{order}', [OrdersController::class, 'destroy'])->name('orders.destroy')->withTrashed();

    // Writers
    Route::get('/writers',            [WritersController::class, 'index'])->name('writers.index');
    Route::get('/writers/add',        [WritersController::class, 'create'])->name('writers.add');
    Route::get('/writers/edit/{id}',  [WritersController::class, 'edit'])->name('writers.edit');
    Route::get('/writers/show/{id}',  [WritersController::class, 'show'])->name('writers.show');

    Route::post('/writers',            [WritersController::class, 'store'])->name('writers.store');
    Route::put('/writers/{id}',        [WritersController::class, 'update'])->name('writers.update');
    Route::delete('/writers/{writer}', [WritersController::class, 'destroy'])->name('writers.destroy')->withTrashed();

    // Customers
    Route::get('/customers',            [CustomersController::class, 'index'])->name('customers.index');
    Route::get('/customers/add',        [CustomersController::class, 'create'])->name('customers.add');
    Route::get('/customers/edit/{id}',  [CustomersController::class, 'edit'])->name('customers.edit');
    Route::get('/customers/show/{id}',  [CustomersController::class, 'show'])->name('customers.show');

    Route::post('/customers',            [CustomersController::class, 'store'])->name('customers.store');
    Route::put('/customers/{id}',        [CustomersController::class, 'update'])->name('customers.update');
    Route::delete('/customers/{customer}', [CustomersController::class, 'destroy'])->name('customers.destroy')->withTrashed();

    // Samples
    Route::get('/samples',            [SamplesController::class, 'index'])->name('samples.index');
    Route::get('/samples/add',        [SamplesController::class, 'create'])->name('samples.add');
    Route::get('/samples/edit/{id}',  [SamplesController::class, 'edit'])->name('samples.edit');
    Route::get('/samples/show/{id}',  [SamplesController::class, 'show'])->name('samples.show');

    Route::post('/samples',            [SamplesController::class, 'store'])->name('samples.store');
    Route::put('/samples/{id}',        [SamplesController::class, 'update'])->name('samples.update');
    Route::delete('/samples/{sample}', [SamplesController::class, 'destroy'])->name('samples.destroy')->withTrashed();

    // Route::patch('/orders', [ProfileController::class, 'update'])->name('orders.update');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
