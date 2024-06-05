<?php

<<<<<<< HEAD
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Models\Category;
use App\Models\Movie;
use App\Models\Order;
use Illuminate\Support\Facades\Artisan;
=======
use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
>>>>>>> origin/master

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

<<<<<<< HEAD
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create')->middleware('admin');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store')->middleware('admin');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])->name('categories.edit')->middleware('admin-user');
Route::put('/categoies/{category}', [CategoryController::class, 'update'])->name('categories.update')->middleware('admin-user');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy')->middleware('admin');


Route::get('/movies', [MovieController::class, 'index'])->name('movies');
Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create')->middleware('admin');;
Route::post('/movies', [MovieController::class, 'store'])->name('movies.store')->middleware('admin');;
Route::get('/movies/{movie}', [MovieController::class, 'show'])->name('movies.show');
Route::get('/movies/edit/{movie}', [MovieController::class, 'edit'])->name('movies.edit')->middleware('admin-user');
Route::put('/movies/{movie}', [MovieController::class, 'update'])->name('movies.update')->middleware('admin-user');
Route::delete('/movies/{movie}', [MovieController::class, 'destroy'])->name('movies.destroy')->middleware('admin');


Route::get('/orders', [OrderController::class, 'index'])->name('orders')->middleware('admin-user');
Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show')->middleware('admin-user');
Route::get('/orders/edit/{order}', [OrderController::class, 'edit'])->name('orders.edit')->middleware('admin-user');
Route::put('/orders/{order}', [OrderController::class, 'update'])->name('orders.update')->middleware('admin-user');
Route::delete('/orders/{order}', [OrderController::class, 'destroy'])->name('orders.destroy')->middleware('admin');



Route::get('/users', [UserController::class, 'index'])->name('users')->middleware('admin');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create')->middleware('admin');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show')->middleware('admin');
Route::post('/users', [UserController::class, 'store'])->name('users.store')->middleware('admin');
Route::get('/users/edit/{user}', [UserController::class, 'edit'])->name('users.edit')->middleware('admin');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update')->middleware('admin');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy')->middleware('admin');

Route::get('/customers', [CustomerController::class, 'index'])->name('customers')->middleware('admin-user');
Route::get('/customers/edit/{customer}', [CustomerController::class, 'edit'])->name('customers.edit')->middleware('admin-user');
Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customers.update')->middleware('admin-user');
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy')->middleware('admin');








Route::controller(AuthController::class)->group(function () {
    Route::get('/auth/login', 'login')->name('login');
    Route::post('/auth/login', 'authenticate')->name('login.authenticate');
    Route::get('/auth/logout', 'logout')->name('logout');
});



Route::get('/', [HomeController::class, 'welcome'])->name('welcome');




=======
Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [CategorieController::class, 'index']);

Route::get('/movies', [MovieController::class, 'index']);
>>>>>>> origin/master



