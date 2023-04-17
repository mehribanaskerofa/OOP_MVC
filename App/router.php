<?php

use Core\Router as Route;
use App\Controller\SliderController;

Route::get('/slider/{id}',[SliderController::class,'Index']);
Route::get('/',['HomeController','Index']);
Route::get('/about',['AboutController','Index']);
Route::get('/slider/{id}',['SliderController','Index']);

Route::post('/contact',['ContactController','storeData']);