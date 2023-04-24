<?php

use Core\Router as Route;
use Core\DB;
use Core\FileService;
use App\Controller\HomeController;
use App\Controller\AboutsController;
use App\Controller\BlogsController;
use App\Controller\LoginController;
use App\Controller\ContactsController;



//
//Route::get('home',function (){
////    $db=new DB();
////    $data=$db->setWhere('id','4','=')->delete();
//
//    return view('admin/headslider');
//});
//Route::post('home',function (){
//    $fileService=new FileService();
//    print_r(pathinfo($_FILES['image']['full_path'], PATHINFO_EXTENSION));
//});

Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'login']);
Route::get('/logout',[LoginController::class,'logout']);




Route::get('/',[HomeController::class,'index']);
Route::get('/about',[AboutsController::class,'index']);

Route::get('/contact',[ContactsController::class,'index']);
Route::post('/contact',[ContactsController::class,'send']);

Route::get('/blogs',[BlogsController::class,'index']);
Route::get('/blogdetail/{id}',[BlogsController::class,'blogdetail']);



//Route::get('/slider/{id}',[SliderController::class,'Index']);
//Route::get('/',['HomeController','Index']);
//Route::get('/about',['AboutController','Index']);
//Route::get('/slider/{id}',['SliderController','Index']);
//
//Route::post('/contact',['ContactController','storeData']);