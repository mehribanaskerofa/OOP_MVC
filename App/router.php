<?php

use Core\Router as Route;
use App\Controller\SliderController;
use App\Controller\HomeController;
use Core\DB;


Route::get('/blog',function (){
    $db=new DB();
    $book=$db->table('books')->update([
        'id'=>1,
        'title'=>'a'
    ]);
//    print_r($book);

});
//Route::get('/home',[HomeController::class,'Index']);

//Route::get('/slider/{id}',[SliderController::class,'Index']);
//Route::get('/',['HomeController','Index']);
//Route::get('/about',['AboutController','Index']);
//Route::get('/slider/{id}',['SliderController','Index']);
//
//Route::post('/contact',['ContactController','storeData']);