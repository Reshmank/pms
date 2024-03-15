<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth','web'])->group(function () {

   Route::any('/addProduct',[HomeController::class, 'addProduct']);
   Route::get('/product_list',[HomeController::class, 'product_list']);
   Route::post('/deleteProduct',[HomeController::class, 'deleteProduct']);
   Route::any('/editProduct',[HomeController::class, 'editProduct']);
   Route::any('/addVarient',[HomeController::class, 'addVarient']);
   
   
   
   
   


});
