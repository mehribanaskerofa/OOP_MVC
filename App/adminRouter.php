<?php

use Core\Router as Route;
use Core\DB;
use Core\FileService;
use App\Controller\HeadSliderController;
use App\Controller\BlogController;
use App\Controller\AboutController;
use App\Controller\ContactController;


//head slider
Route::get('admin/headslider',[HeadSliderController::class,'index']);
Route::post('admin/headslider',[HeadSliderController::class,'add']);

//blog
Route::get('admin/blog',[BlogController::class,'index']);

Route::get('admin/blog/create',[BlogController::class,'create']);
Route::post('admin/blog/create',[BlogController::class,'add']);

Route::get('admin/blog/{id}',[BlogController::class,'edit']);
Route::post('admin/blog/{id}',[BlogController::class,'update']);

Route::post('admin/blog-delete/{id}',[BlogController::class,'delete']);

//about
Route::get('admin/about',[AboutController::class,'index']);
Route::post('admin/about',[AboutController::class,'add']);

//contact
Route::get('admin/contact',[ContactController::class,'index']);
Route::post('admin/contact',[ContactController::class,'add']);

//contact form
Route::get('admin/contact',[ContactController::class,'contactform']);
Route::post('admin/contact-delete/{id}',[ContactController::class,'delete']);
