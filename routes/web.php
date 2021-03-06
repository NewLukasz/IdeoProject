<?php

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

Route::get('category-tree-view',['uses'=>'CategoryController@manageCategory']);
Route::post('add-new-category/{idOfParent}','CategoryController@addNewCategory');

Route::prefix('/category-tree-view')->group(function(){
    Route::delete("/{id}",'CategoryController@destroy');
});
