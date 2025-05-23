<?php

use App\Http\Controllers\RouteController;
use App\Http\Controllers\AuthController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::controller(RouteController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/boutique', 'boutique')->name('boutique');
    Route::get('/addProduct', 'addProduct')->name('addProduct');
    Route::get('/addProduct/{id}', "manageProduct")->name('manageProduct')->where(['id' => '^\d+$']);
    Route::post('/addProduct', 'addProductPost');
    Route::get('/product/{id}', 'getProduct')->where(['id' => '^\d+$'])->name('singleProduct');
    Route::post('/addProduct/{id}', 'updateProduct')->where(['id' => '^\d+$']);
    Route::get('/categoriesList', 'getCategoriesList')->name('getCategoriesList');
    Route::get('/manageCategory', 'addCategory')->name('addCategory');
    Route::post('/manageCategory', 'addCategoryPost');
    Route::get('/manageCategory/{id}', 'manageCategory')->name('manageCategory');
    Route::post('/manageCategory/{id}', 'manageCategoryPost');
    Route::get('/categorie/{id}', 'categorie')->name('categorie')->where(['id' => '^[0-9]+$']);
    Route::get('/tagsList', 'getTagsList')->name('getTagsList');
    Route::get('/addTag', 'addTag')->name('addTag');
    Route::post('/addTag', 'addTagPost');
    Route::get('/addTag/{id}', 'manageTag')->name('manageTag')->where(['id' => '^[0-9]+$']);
    Route::get('/tag/{id}', 'tag')->name('tag')->where(['id' => '^[0-9]+$']);
    Route::post('/addTag/{id}', 'manageTagPost')->where(['id' => '^[0-9]+$']);
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'loginPost');
    Route::get('/signup', 'signup')->name('signup');
    Route::post('/signup', 'signupPost');
    Route::delete('/logout', 'logout')->name('logout');
});
