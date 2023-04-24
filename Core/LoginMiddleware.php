<?php

namespace Core;

use App\Models\LoginModel;
class LoginMiddleware
{
    public function checkLogin()
    {
        $loginname=((new LoginModel())->first())['name'];

        if($_SESSION['admin']!=$loginname){
            return redirect('login');
        }
    }
}