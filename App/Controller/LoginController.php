<?php

namespace App\Controller;

use App\Models\LoginModel;
use Core\Validation;


class LoginController
{
    public function index()
    {
        return view('admin/login/loginform');
    }

    public function login()
    {
        $admin=postData('name');
        $password=postData('password');

        $login=new LoginModel();
        $logindatas=$login->first();


        if(!($logindatas['name']==$admin) || !password_verify($password, $logindatas['password'])){
            $data=[
                'name'=>$admin,
                'password'=>$password
            ];
            return view('admin/login/loginform',compact('data'));
        }
        $_SESSION['admin']=$logindatas['name'];


        return view('admin/headslider');
    }
    public function logout(){
        unset($_SESSION['admin']);
        return redirect('');
    }
}