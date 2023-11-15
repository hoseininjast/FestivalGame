<?php

use Illuminate\Support\Facades\App;
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


Auth::routes();

Route::group(['prefix' => 'Dashboard' , 'as' => 'Dashboard.' , 'middleware' => ['auth' , 'Admin']] , function (){
    Route::get('index' , [\App\Http\Controllers\DashboardController::class , 'index'])->name('index');
    Route::group(['prefix' => 'ProductCategory' , 'as' => 'ProductCategory.'  ] , function (){
        Route::get('/' , [\App\Http\Controllers\ProductCategoryController::class , 'index'])->name('index');
        Route::get('Add' , [\App\Http\Controllers\ProductCategoryController::class , 'Add'])->name('Add');
        Route::post('Create' , [\App\Http\Controllers\ProductCategoryController::class , 'Create'])->name('Create');
        Route::get('Edit/{ID}' , [\App\Http\Controllers\ProductCategoryController::class , 'Edit'])->name('Edit');
        Route::put('Update/{ID}' , [\App\Http\Controllers\ProductCategoryController::class , 'Update'])->name('Update');
        Route::get('Delete/{ID}' , [\App\Http\Controllers\ProductCategoryController::class , 'Delete'])->name('Delete');
    });

    Route::group(['prefix' => 'Product' , 'as' => 'Product.'  ] , function (){
        Route::get('/' , [\App\Http\Controllers\ProductController::class , 'index'])->name('index');
        Route::get('Add' , [\App\Http\Controllers\ProductController::class , 'Add'])->name('Add');
        Route::post('Create' , [\App\Http\Controllers\ProductController::class , 'Create'])->name('Create');
        Route::get('Edit/{ID}' , [\App\Http\Controllers\ProductController::class , 'Edit'])->name('Edit');
        Route::put('Update/{ID}' , [\App\Http\Controllers\ProductController::class , 'Update'])->name('Update');
        Route::get('Delete/{ID}' , [\App\Http\Controllers\ProductController::class , 'Delete'])->name('Delete');
    });

    Route::group(['prefix' => 'SiteSettings' , 'as' => 'SiteSettings.'  ] , function (){
        Route::group(['prefix' => 'Sliders' , 'as' => 'Sliders.'  ] , function (){
            Route::get('/' , [\App\Http\Controllers\SlidersController::class , 'index'])->name('index');
            Route::get('Add' , [\App\Http\Controllers\SlidersController::class , 'Add'])->name('Add');
            Route::post('Create' , [\App\Http\Controllers\SlidersController::class , 'Create'])->name('Create');
            Route::get('Edit/{ID}' , [\App\Http\Controllers\SlidersController::class , 'Edit'])->name('Edit');
            Route::put('Update/{ID}' , [\App\Http\Controllers\SlidersController::class , 'Update'])->name('Update');
            Route::get('Delete/{ID}' , [\App\Http\Controllers\SlidersController::class , 'Delete'])->name('Delete');
        });
        Route::group(['prefix' => 'Banner' , 'as' => 'Banner.'  ] , function (){
            Route::get('/' , [\App\Http\Controllers\BannerController::class , 'index'])->name('index');
            Route::get('Add' , [\App\Http\Controllers\BannerController::class , 'Add'])->name('Add');
            Route::post('Create' , [\App\Http\Controllers\BannerController::class , 'Create'])->name('Create');
            Route::get('Edit/{ID}' , [\App\Http\Controllers\BannerController::class , 'Edit'])->name('Edit');
            Route::put('Update/{ID}' , [\App\Http\Controllers\BannerController::class , 'Update'])->name('Update');
            Route::get('Delete/{ID}' , [\App\Http\Controllers\BannerController::class , 'Delete'])->name('Delete');
        });
    });


});
Route::group(['as' => 'Front.' ] , function (){
    Route::get('/' , [\App\Http\Controllers\WebController::class , 'index'])->name('index');
    Route::get('Categorys' , [\App\Http\Controllers\WebController::class , 'Categorys'])->name('Categorys');
    Route::get('Category/{CategoryName}' , [\App\Http\Controllers\WebController::class , 'Category'])->name('Category');
    Route::get('Category/{CategoryName}/{SubCategoryName}' , [\App\Http\Controllers\WebController::class , 'SubCategory'])->name('SubCategory');
    Route::get('Products' , [\App\Http\Controllers\WebController::class , 'Products'])->name('Products');
    Route::get('Product/{ProductName}' , [\App\Http\Controllers\WebController::class , 'Product'])->name('Product');
});
