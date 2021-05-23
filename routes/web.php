<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Route;

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

/*Default Route
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
*/

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard','App\Http\Controllers\DashboardController@index')->name('dashboard');
});

require __DIR__.'/auth.php';

//food
Route::resource('foods', FoodController::class);
Route::get('/foods',[FoodController::class,'index'])->name('foods.index');
Route::get('/foods/create',[FoodController::class,'create'])->name('foods.create');
Route::post('/foods/store',[FoodController::class,'store'])->name('foods.store');
Route::get('/foods/edit/{id}',[FoodController::class,'edit'])->name('foods.edit');
Route::put('/foods/update/{id}',[FoodController::class,'update'])->name('foods.update');
Route::get('/foods/food/{id}',[FoodController::class,'show'])->name('foods.show');
Route::delete('/foods/delete/{id}',[FoodController::class,'destroy'])->name('foods.delete');

//restaurant
Route::resource('restaurants', RestaurantController::class);
Route::get('/restaurants',[RestaurantController::class,'index'])->name('restaurants.index');
Route::get('/restaurants/create',[RestaurantController::class,'create'])->name('restaurants.create');
Route::post('/restaurants/store',[RestaurantController::class,'store'])->name('restaurants.store');
Route::get('/restaurants/edit/{id}',[RestaurantController::class,'edit'])->name('restaurants.edit');
Route::put('/restaurants/update/{id}',[RestaurantController::class,'update'])->name('restaurants.update');
Route::get('/restaurants/{id}',[RestaurantController::class,'show'])->name('restaurants.show');

//order
Route::resource('orders', OrderController::class);