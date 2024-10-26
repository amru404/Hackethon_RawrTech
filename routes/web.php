<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\imageProductController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('layouts.index');
// });


Auth::routes();
Route::get('/', [LandingController::class, 'home'])->name('home');
Route::get('/user/allProduct', [LandingController::class, 'allProduct'])->name('user.allProduct');
Route::get('/detailWisata/{id}', [LandingController::class, 'detailWisata'])->name('detailWisata');


Route::middleware(['auth', 'user-permission:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

    //route admin product
    Route::get('/admin/product', [ProductController::class, 'index'])->name('admin.product');
    Route::get('/admin/product/add', [ProductController::class, 'create'])->name('admin.product.add');
    Route::POST('/admin/product/store', [ProductController::class, 'store'])->name('admin.product.store');
    Route::get('/admin/product/show/{id}', [ProductController::class, 'show'])->name('admin.product.show');
    Route::get('/admin/product/edit/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::PUT('/admin/product/update/{id}', [ProductController::class, 'update'])->name('admin.product.update');
    Route::get('/admin/product/destroy/{id}', [ProductController::class, 'destroy'])->name('admin.product.destroy');

     //route admin ticket
     Route::get('/admin/ticket', [TicketController::class, 'index'])->name('admin.ticket');
     Route::get('/admin/ticket/add', [TicketController::class, 'create'])->name('admin.ticket.add');
     Route::POST('/admin/ticket/store', [TicketController::class, 'store'])->name('admin.ticket.store');
     Route::get('/admin/ticket/edit/{id}', [TicketController::class, 'edit'])->name('admin.ticket.edit');
     Route::PUT('/admin/ticket/update/{id}', [TicketController::class, 'update'])->name('admin.ticket.update');
     Route::get('/admin/ticket/destroy/{id}', [TicketController::class, 'destroy'])->name('admin.ticket.destroy');
 
      //route admin order
      Route::get('/admin/order', [OrderController::class, 'index'])->name('admin.order');
      Route::get('/admin/export', [OrderController::class, 'export'])->name('admin.order.export');
      Route::get('/admin/order/add', [OrderController::class, 'create'])->name('admin.order.add');
      Route::POST('/admin/order/store', [OrderController::class, 'store'])->name('admin.order.store');
      Route::get('/admin/order/show/{id}', [OrderController::class, 'show'])->name('admin.order.show');
      Route::get('/admin/order/edit/{id}', [OrderController::class, 'edit'])->name('admin.order.edit');
      Route::PUT('/admin/order/update/{id}', [OrderController::class, 'update'])->name('admin.order.update');
      Route::get('/admin/order/destroy/{id}', [OrderController::class, 'destroy'])->name('admin.order.destroy');
  
      //route admin order
      Route::get('/admin/transaksi', [TransaksiController::class, 'index'])->name('admin.transaksi');
      Route::get('/admin/transaksi/add', [TransaksiController::class, 'create'])->name('admin.transaksi.add');
      Route::POST('/admin/transaksi/store', [TransaksiController::class, 'store'])->name('admin.transaksi.store');
      Route::get('/admin/transaksi/edit/{id}', [TransaksiController::class, 'edit'])->name('admin.transaksi.edit');
      Route::PUT('/admin/transaksi/update/{id}', [TransaksiController::class, 'update'])->name('admin.transaksi.update');
      Route::get('/admin/transaksi/destroy/{id}', [TransaksiController::class, 'destroy'])->name('admin.transaksi.destroy');

      //route admin contact
      Route::get('/admin/contact', [ContactController::class, 'index'])->name('admin.contact');
      Route::get('/admin/contact/add', [ContactController::class, 'create'])->name('admin.contact.add');
      Route::get('/admin/contact/show/{id}', [ContactController::class, 'show'])->name('admin.contact.show');
      Route::POST('/admin/contact/store', [ContactController::class, 'store'])->name('admin.contact.store');
      Route::get('/admin/contact/edit/{id}', [ContactController::class, 'edit'])->name('admin.contact.edit');
      Route::PUT('/admin/contact/update/{id}', [ContactController::class, 'update'])->name('admin.contact.update');
      Route::get('/admin/contact/destroy/{id}', [ContactController::class, 'destroy'])->name('admin.contact.destroy');
      


      Route::get('/admin/chartorder', [HomeController::class, 'GetChartOrder'])->name('admin.chartorder');
      Route::get('/admin/image', [imageProductController::class, 'index'])->name('admin.image');
      Route::post('/admin/image/store', [imageProductController::class, 'imageUpload'])->name('admin.image.store');

});

Route::POST('/contact/store', [ContactController::class, 'userStore'])->name('contact.store');
  

Route::middleware(['auth', 'user-or-admin-permission'])->group(function () {

    Route::get('/user/home', [HomeController::class, 'userHome'])->name('user.home');
    Route::get('user/ticket', [LandingController::class, 'checkTicket'])->name('user.ticket');
    Route::post('user/order', [LandingController::class, 'store'])->name('user.order');
    Route::get('user/order/data', [LandingController::class, 'orderData'])->name('user.order.data');
    Route::post('user/transaksi/store', [LandingController::class, 'createTransaksi'])->name('user.transaksi.store');
    Route::get('user/transaksi/data', [LandingController::class, 'dataTransaksi'])->name('user.transaksi.data');

});

 