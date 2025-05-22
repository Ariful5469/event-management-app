<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;
route::get('/', [HomeController::class, 'home']);

route::get('/dashboard', [HomeController::class, 'home'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



route::get('admin/dashboard', [AdminController::class, 'admin_index'])->
   middleware(['auth','admin']);

route::get('admin_index', [AdminController::class, 'admin_index'])->
   middleware(['auth','admin']);




route::get('add_product', [AdminController::class, 'add_product'])->middleware(['auth','admin']);

route::post('upload_product', [AdminController::class, 'upload_product'])->
   middleware(['auth','admin']);


route::get('view_product', [AdminController::class, 'view_product'])->
   middleware(['auth','admin']);


   route::get('delete_product/{id}', [AdminController::class, 'delete_product'])->
   middleware(['auth','admin']);


   route::get('update_product/{id}', [AdminController::class, 'update_product'])->
   middleware(['auth','admin']);



   route::post('edit_product/{id}', [AdminController::class, 'edit_product'])->
   middleware(['auth','admin']);


   route::get('search_product', [AdminController::class, 'search_product'])->
   middleware(['auth','admin']);


   route::get('search_product', [SellerController::class, 'search_product'])->
   middleware(['auth','seller']);
   route::get('search_product', [SellerController::class, 'search_product'])->
   middleware(['auth','verified']);

 

route::get('product_details/{id}', [HomeController::class, 'product_details']);





route::get('seller/dashboard', [SellerController::class, 'index'])
    ->middleware(['auth', 'seller']);


 route::get('index', [SellerController::class, 'index'])->middleware(['auth','seller']);
    
 

 route::get('add_product', [SellerController::class, 'add_product'])->middleware(['auth','seller']);
 
 route::post('upload_product_seller', [SellerController::class, 'upload_product'])->
    middleware(['auth','seller']);
 
    route::post('profile', [SellerController::class, 'profile'])->
    middleware(['auth','seller']);
 
 
 
  

 
   


 
 

 
 