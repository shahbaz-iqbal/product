<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Auth;

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
    // redirect('/login-register');
    return view('home.login_register');
    // return view('home.index');
});

Auth::routes();
Route::get('/login-register', ['as' => 'login', 'uses' => 'App\Http\Controllers\UserController@loginRegister']);
Route::post('/login', [App\Http\Controllers\UserController::class, 'loginUser']);
Route::post('/register', [App\Http\Controllers\UserController::class, 'registerUser']);
Route::get('/logout', [App\Http\Controllers\UserController::class, 'logoutUser']);

// Confirm Account
Route::get('/confirm/{code}', [App\Http\Controllers\UserController::class, 'confirmAccount']);
Route::post('/confirm/{code}', [App\Http\Controllers\UserController::class, 'confirmAccount']);

// Forgot Password
Route::get('/forgot/password', [App\Http\Controllers\UserController::class, 'forgotPassword']);
Route::post('/forgot/password', [App\Http\Controllers\UserController::class, 'forgotPassword']);

Route::get('/product/{id}', [App\Http\Controllers\ProductsController::class, 'detail']);

Route::group(['middleware' => ['auth']], function () {
    //Update User Details & Password
    Route::get('/user/account', [App\Http\Controllers\UserController::class, 'account']);
    Route::post('/user/account', [App\Http\Controllers\UserController::class, 'account']);

    // Change New PassWord
    Route::post('/check-user-pwd', [App\Http\Controllers\UserController::class, 'chkUserPassword']);
    Route::post('/update-user-pwd', [App\Http\Controllers\UserController::class, 'updateUserPassword']);

    Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
        Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    });
});



// Route::prefix('/admin')->namespace('Admin.')->group(function () {
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    //admin login 
    Route::get('/login', [App\Http\Controllers\Admin\AdminController::class, 'login']);
    Route::post('/login', [App\Http\Controllers\Admin\AdminController::class, 'login']);

    // Route::group(['middleware' => ['admin']], function () {
        //logout
        Route::get('/logout', [App\Http\Controllers\Admin\AdminController::class, 'logout']);

        //dashboard
        Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->name('dashboard');
        //categories
        Route::get('/categories', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('categories');
        //Packages
        Route::get('/packages', [App\Http\Controllers\Admin\PackageController::class, 'index'])->name('packages');
        Route::get('/packages/create', [App\Http\Controllers\Admin\PackageController::class, 'create'])->name('package.create');
        Route::post('/packages/store', [App\Http\Controllers\Admin\PackageController::class, 'store'])->name('package.store');
        Route::get('/packages/edit/{id}', [App\Http\Controllers\Admin\PackageController::class, 'edit'])->name('package.edit');
        Route::post('/packages/update', [App\Http\Controllers\Admin\PackageController::class, 'update'])->name('package.update');
        //Users
        Route::get('/users', [App\Http\Controllers\Admin\UsersController::class, 'index'])->name('users');
        //Users
        Route::get('/posts', [App\Http\Controllers\Admin\PostController::class, 'index'])->name('posts');
        Route::get('create/posts/{category_id}', [App\Http\Controllers\Admin\PostController::class, 'create'])->name('posts.create');
    // });
});
