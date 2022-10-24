<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


///////////// PUBLIC ROUTES ///////////////////////

///////// USER //////////
Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login'])->name('login');


//////// PRODUCTS ///////
// Get all products
Route::get('products', [ProductController::class, 'getProducts']);

// Get a product
Route::get('product/{id}', [ProductController::class, 'getProduct']);

// Search a product
Route::get('product/search/{name}', [ProductController::class, 'searchProduct']);


//////// ARTICLES ///////
// Get all articles
Route::get('articles', [ArticleController::class, 'getArticles']);

// Get an article
Route::get('article/{id}', [ArticleController::class, 'getArticle']);



/////////// PRIVATE ROUTES ////////////////////
Route::group(['middleware' => ['auth:sanctum']], function(){

    /////////////// PRODUCTS /////////////////

    // Add a product
    Route::post('products', [ProductController::class, 'addProduct'])->middleware('admin');

    // Update a product
    Route::put('product/{id}', [ProductController::class, 'updateProduct'])->middleware('admin');

    // Delete a product
    Route::delete('product/{id}', [ProductController::class, 'deleteProduct'])->middleware('admin');


    /////////////// ARTICLES /////////////////

    // Add an article
    Route::post('articles', [ArticleController::class, 'addArticle'])->middleware('admin');

    // Update an article
    Route::put('article/{id}', [ArticleController::class, 'updateArticle'])->middleware('admin');

    // Delete an article
    Route::delete('article/{id}', [ArticleController::class, 'deleteArticle'])->middleware('admin');


    /////////////// USERS ////////////////

    // Get current user logged in
    Route::get('user', [UserController::class, 'user']);

    // Get all the users
    Route::get('users', [UserController::class, 'getUsers'])->middleware('admin');

    // Get a specific user
    Route::get('user/{id}', [UserController::class, 'getUser'])->middleware('admin');
    
    // Edit a user
    Route::put('user/{id}', [UserController::class, 'editUser'])->middleware('admin');

    // Delete a user
    Route::delete('user/{id}', [UserController::class, 'deleteUser'])->middleware('admin');

    // Add a user
    Route::post('addUser', [UserController::class, 'register'])->middleware('admin');

    // Logout route
    Route::post('/logout', [UserController::class, 'logout']);


    /////////// ORDERS /////////////////

    // Get a particular user orders
    Route::get('my-orders/{id}', [OrderController::class, 'myOrders']);
    
    // Make an order
    Route::post('my-orders/{id}', [OrderController::class, 'makeOrder']);

});