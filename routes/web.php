<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DetailOrderController;
use App\Http\Controllers\OrderController;
use App\Models\DetailOrder;
use Illuminate\Support\Facades\Session;


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

Route::get('/', function () {
    return view('welcome', ["title" => "PCHub"]);
});

// Route::get('/', [ProductController::class, 'getSample']);




Route::get('/about', function () {
    return view('about', ["title" => "About"]);
});

Route::get('/signin', function () {
    return view('signin', ["title" => "Sign In"]);
});

Route::post('/signin', [LoginController::class, 'authenticate']);
Route::get('/signout', [LoginController::class, 'signout']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/custom', [ProductController::class, 'getAll']);

Route::get('/addproducts', function () {
    return view('addproducts', ["title" => "Add Products"]);
});

Route::post('/addproducts', [ProductController::class, 'store']);

Route::get('/detail', function () {
    return view('detailproduct', ["title" => "Detail Product"]);
});

Route::get('/profile', [CustomerController::class, 'getCustomer']);

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);

Route::get('/addproducts', function () {
    $level = Session::get('user');
    if ($level == "admin") {
        return view('addproducts', ["title" => "Add Products"]);
    } else {
        return redirect()->back();
    }
});

Route::post('/detailproduct/{id}', [DetailOrderController::class, 'store']);

//Route::get('/cart', [OrderController::class, 'showCart']);

Route::get('/showproducts', [ProductController::class, 'getAllForShow']);

Route::post('/search', [ProductController::class, 'search']);
Route::get('/search/{id}', [ProductController::class, 'searchCategory']);
Route::post('/detailorder/{id}', [DetailOrderController::class, 'destroy']);

Route::get('/cart', function () {
    $orders = OrderController::getAllOrder();
    return view('cart', ["title" => "Cart", 'orders' => $orders]);
});

Route::get('/payment', function () {
    $orders = OrderController::getAllOrder();
    return view('payment', ["title" => "Payment Methods", 'orders' => $orders]);
});

Route::post('/payment', [OrderController::class, 'store']);

Route::get('/shipment', [OrderController::class, 'getForShipment']);

Route::post('/shipment/{id}', [OrderController::class, 'sendOrder']);
// Route::delete('/shipment/{id}', [DetailOrder::class, 'destroy']);

Route::get('/pesanan', [OrderController::class, 'showPesanan']);

Route::post('/order/{id}', [OrderController::class, 'hasBeenReceived']);

Route::get('/searchID', function () {
    $level = Session::get('user');
    if ($level == "admin") {
        return view('searchID', ["title" => "Select Product's ID"]);
    } else {
        return redirect()->back();
    }
});

Route::get('/editproducts', [ProductController::class, 'getByID']);

Route::post('/editproducts', [ProductController::class, 'update']);

Route::get('/editproducts', [ProductController::class, 'getByID']);

Route::get('/orderhistory', [OrderController::class, 'getAllForShow']);

Route::post('/custom', [OrderController::class, 'customPc']);

Route::get('/edituser', [CustomerController::class, 'getByID']);

Route::post('/edituser', [CustomerController::class, 'update']);
