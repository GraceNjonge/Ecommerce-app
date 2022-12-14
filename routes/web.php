<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Models\Product;

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
    return view('welcome');
});

Route::middleware([ 'auth:sanctum', 'verified'])->get('/dashboard',function()
 {
        return view('dashboard');
    })->name('dashboard');


Route::get('/redirect', [HomeController::class,'redirect']);
Route::get('/', [HomeController::class,'index']);
Route::get('/product', [App\Http\Controllers\AdminController::class,'product']);
Route::post('/uploadproduct', [App\Http\Controllers\AdminController::class,'uploadproduct']);
