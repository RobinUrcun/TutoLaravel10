<?php

use App\Http\Controllers\RouteController;
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
Route::controller(RouteController::class)->group( function (){
    Route::get('/', 'index')->name('index');
    Route::get('/boutique', 'boutique')->name('boutique');
    Route::get('/addProduct', 'addProduct')->name('addProduct');
    Route::get('/addProduct/{id}', "manageProduct")->name('manageProduct')->where(['id' => '^\d+$']);
    Route::post('/addProduct', 'addProductPost');
    Route::get('/product/{id}', 'getProduct')->where(['id' => '^\d+$'])->name('singleProduct');
    Route::post('/addProduct/{id}', 'updateProduct')->where(['id' => '^\d+$']);
    Route::get('/categoriesList', 'getCategoriesList')->name('getCategoriesList');
});