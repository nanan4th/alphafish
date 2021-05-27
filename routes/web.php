<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\DashboardController;
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
    return view('home');
});

Route::get('/explore', [DashboardController::class,'menu'])->name('explore');
Route::get('/about', function(){
    return view('about');
});

require __DIR__ . '/auth.php';
//resource
Route::resource('foods', FoodController::class);
Route::resource('restaurants', RestaurantController::class);
Route::resource('orders', OrderController::class);

//route for admin
Route::group(['middleware' => ['auth', 'role:admin']], function () {
    //food controller
    Route::get('/foods', [FoodController::class,'index'])->name('foods.index');
    Route::get('/foods/create', [FoodController::class,'create'])->name('foods.create');
    Route::post('/foods/store', [FoodController::class,'store'])->name('foods.store');
    Route::get('/foods/edit/{id}', [FoodController::class,'edit'])->name('foods.edit');
    Route::put('/foods/update/{id}', [FoodController::class,'update'])->name('foods.update');
    Route::get('/foods/{id}', [FoodController::class,'show'])->name('foods.show');
    Route::delete('/foods/delete/{id}', [FoodController::class,'destroy'])->name('foods.delete');
    
    //restaurant controller
    Route::get('/restaurants', [RestaurantController::class,'index'])->name('restaurants.index');
    Route::get('/restaurants/create', [RestaurantController::class,'create'])->name('restaurants.create');
    Route::post('/restaurants/store', [RestaurantController::class,'store'])->name('restaurants.store');
    Route::get('/restaurants/edit/{id}', [RestaurantController::class,'edit'])->name('restaurants.edit');
    Route::put('/restaurants/update/{id}', [RestaurantController::class,'update'])->name('restaurants.update');
    Route::get('/restaurants/{id}', [RestaurantController::class,'show'])->name('restaurants.show');
    Route::delete('/restaurants/delete/{id}', [RestaurantController::class,'destroy'])->name('restaurants.delete');
});

//route for user
Route::group(['middleware' => ['auth', 'role:user']], function () {
    Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
    Route::post('/orders/store', [OrderController::class, 'store'])->name('orders.store');
});

//route logout
Route::get('logout', function()
{
    Auth::logout();
    return redirect('/');
});