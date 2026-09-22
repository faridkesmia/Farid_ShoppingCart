<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterLoginLogoutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home',  [ProductController::class,'GoHome'])->name('home');
 

#Show the All Categories Page ----------------------------------------
Route::get('AllCategories',[CategoryController::class,'showCategories']);
#show All Product page -------------------------------------------------------------
Route::get('products/{id}',[ProductController::class,'ShowProductFromGatygories']);


#show the Add Category Form ------------------------------------------------
Route::get('add_Category',[CategoryController::class,'ShowAddCategoryForm'])->middleware(['auth','CheckUser']) ;
# Function for the registration process : Add a New Category to Database
Route::post('add_CategoryProccess',[CategoryController::class,'registration_process'])->name('registration-process') ;


#show the add Product Form----------------------------------------------
Route::get('add_Product',[ProductController::class,'ShowAddProductForm'])->middleware('CheckUser') ;
# Function for The Add Product process : Add a New Product to Database
Route::post('add_ProductProccess',[ProductController::class,'add_product_process'])->name('add_product_process') ;


# Function for The Add Product To Cart (process) : Add a New Product to Cart
Route::post('addToCart',[CartController::class,'add_to_cart_process'])->name('add_to_cart_process') ;

#Function to show Cart Form------------------------------------------------
Route::get('cart',[CartController::class,'ShowCartForm']) ;

# Function for The update Quantity Product in Cart (process) : Add a New Quantity in Cart
Route::put('update',[CartController::class,'updateqty'])->name('update_qty') ;


# Function for The DELETE Item From Cart (process) : delete item from cart
Route::delete('deleteItem',[CartController::class,'delete_item'])->name('delete_item') ;

# Function for Clear All The Cart (process) : delete All items from The cart
Route::delete('ClearCart',[CartController::class,'Clear_Cart'])->name('Clear_Cart') ;


#Call order pay Function to pay prodct **********************
Route::get('order/pay',[OrderController::class,'PayOrderByStripe'])->name('order.pay');
Route::get('success/pay',[OrderController::class,'successPaid'])->name('order.success');

#Show The Register user Form ------------------------------------------------
Route::get('Registeruser',[RegisterLoginLogoutController::class,'Show_RegisterForm'])->name('Show_RegisterForm');
#The Register Proccess *************************
Route::post('Register',[RegisterLoginLogoutController::class,'RegisterProccess'])->name('Register.Proccess');

#Show The Login user Form --------------------------------------------------------------
Route::get('login',[RegisterLoginLogoutController::class,'Show_LoginForm'])->name('login');

#Function for Login Proccess ***************************************************
Route::post('LoginProccsess',[RegisterLoginLogoutController::class,'Login_Proccess'])->name('Login.Proccess');

#Function for LogOUT Proccess ***************************************************
Route::get('logout',[RegisterLoginLogoutController::class,'logout'])->name('logout');

Route::get('csrftoken',[CategoryController::class,'csrftoken']); # هاذي تاع الخرا تاع الطوكن
