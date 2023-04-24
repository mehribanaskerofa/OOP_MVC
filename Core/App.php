<?php

namespace Core;

class App
{
    public function configure(){
        require_once __DIR__.'/../App/config.php';
        require_once __DIR__.'/../App/adminRouter.php';
        require_once __DIR__.'/../App/router.php';
        require_once __DIR__.'/../App/helper.php';
        require_once __DIR__.'/Validation.php';
        require_once __DIR__.'/LoginMiddleware.php';

    }
    public function handleRequests()
    {
        session_start();
        (new Router())->handleRoute();
    }
}