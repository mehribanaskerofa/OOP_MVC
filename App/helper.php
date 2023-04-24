<?php


function view($viewName,$params=[]){
    extract($params);
    require_once __DIR__."/View/".$viewName.".php";
}
function postData($key)
{
    return $_POST[$key] ?? null;
}

function getData($key)
{
    return $_GET[$key] ?? null;
}

function generateRandomString($length = 10): string
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

//function view($viewName, $params = [])
//{
//    extract($params);
//    return require_once(__DIR__ . "/views/$viewName.php");
//}

function redirect(string $url, $fullUrl = false)
{
    $redirectUrl = $fullUrl ? $url : BASE_URL . '/' . $url;
    header('Location:' . $redirectUrl);
    exit();
}


function img($imageName)
{
    return BASE_URL . '/uploads/' . $imageName;
}

function asset($url){
    return BASE_URL."/App/View/$url";
}

function url($url)
{
    return BASE_URL."/$url";
}