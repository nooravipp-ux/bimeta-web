<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/system/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('route:clear');   
    return 'DONE'; //Return anything
});

Route::get('/', [App\Http\Controllers\FrontController::class, 'beranda'])->name('beranda')->middleware('visitor');
Route::get('/profil', [App\Http\Controllers\FrontController::class, 'companyProfile'])->name('companyProfile')->middleware('visitor');
Route::get('/produk', [App\Http\Controllers\FrontController::class, 'product'])->name('product')->middleware('visitor');
Route::get('/kontak', [App\Http\Controllers\FrontController::class, 'contact'])->name('contact')->middleware('visitor');

Route::post('/messages/store', [App\Http\Controllers\MessageController::class, 'store'])->name('message.store');

Route::get('/sitemap.xml', [App\Http\Controllers\SitemapController::class, 'index'])->name('sitemap');

Auth::routes();

Route::get('/admin/pengguna/change-password', [App\Http\Controllers\UserController::class, 'changePassword'])->name('users.change-password');
Route::post('/admin/pengguna/change-password/update', [App\Http\Controllers\UserController::class, 'storeChangedPassword'])->name('users.update.change-password');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/clear-cache', [App\Http\Controllers\HomeController::class, 'clearCache'])->name('clearCache');

Route::get('/admin/company-profile', [App\Http\Controllers\CompanyProfilController::class, 'index'])->name('conf.compro.index');
Route::get('/admin/company-profile/edit/{id}', [App\Http\Controllers\CompanyProfilController::class, 'edit'])->name('conf.compro.edit');
Route::get('/admin/company-profile/update', [App\Http\Controllers\CompanyProfilController::class, 'update'])->name('conf.compro.update');
Route::get('/admin/company-profile/delete/{id}', [App\Http\Controllers\CompanyProfilController::class, 'delete'])->name('conf.compro.delete');

Route::get('/admin/page/config/contact', [App\Http\Controllers\CContactController::class, 'index'])->name('conf.contact.index');
Route::get('/admin/page/config/contact/edit/{id}', [App\Http\Controllers\CContactCompanyProfilController::class, 'edit'])->name('conf.contact.edit');
Route::get('/admin/page/config/contact/update', [App\Http\Controllers\CContactCompanyProfilController::class, 'update'])->name('conf.contact.update');
Route::get('/admin/page/config/contact/delete/{id}', [App\Http\Controllers\CContactCompanyProfilController::class, 'delete'])->name('conf.contact.delete');

Route::get('/admin/page/config/beranda', [App\Http\Controllers\CBrandaController::class, 'index'])->name('conf.beranda.index');
Route::get('/admin/page/config/beranda/edit/{id}', [App\Http\Controllers\CBrandaController::class, 'edit'])->name('conf.beranda.edit');
Route::get('/admin/page/config/beranda/update', [App\Http\Controllers\CBrandaController::class, 'update'])->name('conf.beranda.update');
Route::get('/admin/page/config/beranda/delete/{id}', [App\Http\Controllers\CBrandaController::class, 'delete'])->name('conf.beranda.delete');

Route::get('/admin/product', [App\Http\Controllers\ProductController::class, 'index'])->name('conf.product.index');
Route::get('/admin/product/create', [App\Http\Controllers\ProductController::class, 'create'])->name('conf.product.create');
Route::get('/admin/product/category/create', [App\Http\Controllers\ProductController::class, 'categoryCreate'])->name('conf.product.category.create');
Route::post('/admin/product/store', [App\Http\Controllers\ProductController::class, 'store'])->name('conf.product.store');
Route::post('/admin/product/category/store', [App\Http\Controllers\ProductController::class, 'categoryStore'])->name('conf.product.category.store');
Route::get('/admin/product/category/edit/{id}', [App\Http\Controllers\ProductController::class, 'editCategory'])->name('conf.product.category.edit');
Route::post('/admin/product/category/update', [App\Http\Controllers\ProductController::class, 'updateCategory'])->name('conf.product.category.update');
Route::get('/admin/product/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('conf.product.edit');
Route::post('/admin/product/update', [App\Http\Controllers\ProductController::class, 'update'])->name('conf.product.update');
Route::get('/admin/product/delete/{id}', [App\Http\Controllers\ProductController::class, 'delete'])->name('conf.product.delete');

Route::post('/admin/product/update-image', [App\Http\Controllers\ProductController::class, 'updateImage'])->name('conf.product.image.update');

Route::get('/admin/messages', [App\Http\Controllers\MessageController::class, 'index'])->name('message.index');
Route::get('/admin/messages/delete/{id}', [App\Http\Controllers\MessageController::class, 'delete'])->name('message.delete');

Route::get('/admin/customers', [App\Http\Controllers\CustomerController::class, 'index'])->name('customers.index');
Route::get('/admin/customers/create', [App\Http\Controllers\CustomerController::class, 'create'])->name('customers.create');
Route::post('/admin/customers/store', [App\Http\Controllers\CustomerController::class, 'store'])->name('customers.store');
Route::get('/admin/customers/edit/{id}', [App\Http\Controllers\CustomerController::class, 'edit'])->name('customers.edit');
Route::post('/admin/customers/update', [App\Http\Controllers\CustomerController::class, 'update'])->name('customers.update');
Route::get('/admin/customers/delete/{id}', [App\Http\Controllers\CustomerController::class, 'delete'])->name('customers.delete');

Route::get('/admin/testimoni', [App\Http\Controllers\TestimoniController::class, 'index'])->name('testimoni.index');
Route::get('/admin/testimoni/create', [App\Http\Controllers\TestimoniController::class, 'create'])->name('testimoni.create');
Route::post('/admin/testimoni/store', [App\Http\Controllers\TestimoniController::class, 'store'])->name('testimoni.store');
Route::get('/admin/testimoni/edit/{id}', [App\Http\Controllers\TestimoniController::class, 'edit'])->name('testimoni.edit');
Route::post('/admin/testimoni/update', [App\Http\Controllers\TestimoniController::class, 'update'])->name('testimoni.update');
Route::get('/admin/testimoni/delete/{id}', [App\Http\Controllers\TestimoniController::class, 'delete'])->name('testimoni.delete');

