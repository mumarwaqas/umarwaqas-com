<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\PostsController;

use App\Http\Controllers\Admin\CKEditorController;

use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\WritersController;
use App\Http\Controllers\Admin\SamplesController;
use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\Admin\FaqsController;


use App\Http\Controllers\Admin\PagesController;

use App\Http\Controllers\OrderController;
use App\Http\Controllers\WebPageController;
use App\Http\Controllers\AdminCommandController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin', function () {
    return view('welcome');
});

Route::get('routelist', [AdminCommandController::class, 'routeList']);


Route::get('/migrate', [AdminCommandController::class, 'migrate']);
Route::get('/migratefresh', [AdminCommandController::class, 'migrateFresh']);
Route::get('/migraterollback', [AdminCommandController::class, 'migrateRllback']);

Route::get('/writer/seed', [AdminCommandController::class, 'writerSeed']);
Route::get('/order/seed', [AdminCommandController::class, 'orderSeeder']);
Route::get('/seed', [AdminCommandController::class, 'seed']);

Route::get('/clear-all-cache', [AdminCommandController::class, 'clearAllCache']);

Route::get('/clear-cache', [AdminCommandController::class, 'clearCache']);
Route::get('/clear-config-cache', [AdminCommandController::class, 'clearConfigCache']);
Route::get('/clear-route-cache', [AdminCommandController::class, 'clearRouteCache']);
Route::get('/clear-view-cache', [AdminCommandController::class, 'clearViewCache']);
Route::get('/cache-config', [AdminCommandController::class, 'cacheConfig']);
Route::get('/cache-routes', [AdminCommandController::class, 'cacheRoutes']);
Route::get('/cache-views', [AdminCommandController::class, 'cacheViews']);
Route::get('/cache-status', [AdminCommandController::class, 'cacheStatus']);


Route::get('/', [WebPageController::class, 'home'])->name('home');
Route::get('/about', [WebPageController::class, 'about'])->name('about');
Route::get('/discount', [WebPageController::class, 'discount'])->name('discount');
Route::get('/how-its-works', [WebPageController::class, 'how_its_works'])->name('how-its-works');
Route::get('/guarantees', [WebPageController::class, 'guarantees'])->name('guarantees');
Route::get('/faqs', [WebPageController::class, 'faqs'])->name('faqs');
Route::get('/frequently-asked-question', [WebPageController::class, 'faqs'])->name('faqs');


Route::get('/our-samples', [WebPageController::class, 'samples'])->name('samples');
Route::get('/sample/{slug}', [WebPageController::class, 'sample'])->name('sample');

Route::get('/our-writers', [WebPageController::class, 'writers'])->name('writers');
Route::get('/writer/{slug}', [WebPageController::class, 'writer'])->name('writer');

Route::get('/our-reviews', [WebPageController::class, 'reviews'])->name('reviews');

Route::get('/refund-policy', [WebPageController::class, 'refundpolicy'])->name('refundpolicy');
Route::get('/terms-and-conditions', [WebPageController::class, 'termsandconditions'])->name('termsandconditions');
Route::get('/fair-use-policy', [WebPageController::class, 'fairusepolicy'])->name('fairusepolicy');
Route::get('/money-back-guarantee', [WebPageController::class, 'moneybackguarantee'])->name('moneybackguarantee');
Route::get('/privacy-policy', [WebPageController::class, 'privacypolicy'])->name('privacypolicy');
Route::get('/cookie-policy', [WebPageController::class, 'cookiepolicy'])->name('cookiepolicy');


Route::get('/prices', [WebPageController::class, 'prices'])->name('prices');
Route::get('/services',       [WebPageController::class, 'services'])->name('services');


Route::get('/contact-us', [WebPageController::class, 'contact'])->name('contact');
Route::post('/contact-us/save', [WebPageController::class, 'save'])->name('contact.save');

Route::get('/blogs', [WebPageController::class, 'posts'])->name('posts');
Route::get('/blog/{slug}', [WebPageController::class, 'post'])->name('post');

Route::get('/category/{slug}', [WebPageController::class, 'category'])->name('category');
Route::get('/author/{slug}', [WebPageController::class, 'author'])->name('author');

Route::get('/order-now', [OrderController::class, 'create'])->name('order-now');
Route::get('/order-preview', [OrderController::class, 'preview'])->name('order-preview');

Route::get('/{slug}', [WebPageController::class, 'service'])->name('service');

// 404 Page for Form Submission Route
Route::get('/404', [WebPageController::class, 'show404'])->name('404');

// Thank You Page for Form Submission Route
Route::get('/thank-you', [WebPageController::class, 'showThankYou'])->name('thank-you')->middleware('submitted');

// Thank You Page for Another Scenario (e.g., Purchase) Route
Route::get('/thank-you-2', [WebPageController::class, 'showThankYouPurchase'])->name('thank-you.purchase');

Route::post('/store', [OrderController::class, 'store'])->name('store');

Route::post('/file-upload', [OrderController::class, 'upload'])->name('file.upload');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->prefix('admin')->name('dashboard');

Route::middleware('auth')->prefix('admin')->group(function () {

    // Ckeditor
    Route::post('/ckeditor/upload', [CKEditorController::class, 'upload'])->name('ckeditor.upload');
    Route::get('/ckeditor/files', [CKEditorController::class, 'list'])->name('ckeditor.files');
    Route::delete('/ckeditor/files/{filename}', [CKEditorController::class, 'delete'])->name('ckeditor.delete');
    
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

    // Faqs
    Route::get('/faqs',            [FaqsController::class, 'index'])->name('faqs.index');
    Route::get('/faqs/add',        [FaqsController::class, 'create'])->name('faqs.add');
    Route::get('/faqs/edit/{id}',  [FaqsController::class, 'edit'])->name('faqs.edit');
    Route::get('/faqs/show/{id}',  [FaqsController::class, 'show'])->name('faqs.show');

    Route::post('/faqs',            [FaqsController::class, 'store'])->name('faqs.store');
    Route::put('/faqs/{id}',        [FaqsController::class, 'update'])->name('faqs.update');
    Route::delete('/faqs/{faq}',    [FaqsController::class, 'destroy'])->name('faqs.destroy')->withTrashed();

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
