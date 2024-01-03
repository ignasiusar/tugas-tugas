<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Product;
use App\Models\User;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\IndexController;
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

Route::get('/', function()
{
    $products=Product::all();
    return view('indexu',compact('products'));
});
Route::get('/about', [App\Http\Controllers\IndexController::class, 'about'])->name('about');
Route::get('/tracklist', [App\Http\Controllers\IndexController::class, 'tracklist'])->name('tracklist');
// Route::get('/merch1', [App\Http\Controllers\IndexController::class, 'merch1'])->name('merch1');
Route::get('/merch1', function()
{
    $products=Product::all();
    return view('merch1',compact('products'));
});
Route::get('/merch', function()
{
    $products=Product::all();
    return view('merch',compact('products'));
});
Auth::routes();

Route::middleware(['auth', 'user-access:user'])->group(function(){
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/home', [App\Http\Controllers\HomeController::class, 'upload'])->name('upload');
});

Route::middleware(['auth', 'user-access:admin'])->group(function(){
    
    Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');
    Route::post('/admin/home', [App\Http\Controllers\HomeController::class, 'upload'])->name('upload');
    Route::resource('products', App\Http\Controllers\ProductController::class);
});
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

// Route::middleware(['auth', 'user-access:admin'])->group(function(){
    
//     Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
// });