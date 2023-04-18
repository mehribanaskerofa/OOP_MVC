<?php


function view($viewName,$params=[]){
    require_once __DIR__."/View/".$viewName.".php";
}