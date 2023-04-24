<?php

namespace App\Controller;

use App\Models\ContactModel;
use App\Models\ContactformModel;
use Core\FileService;
use Core\Validation;
use Core\LoginMiddleware;


class ContactController
{
    private FileService $fileService;

    public function __construct()
    {
        $this->fileService=new FileService();
    }

    public function index()
    {
        $middleware=new LoginMiddleware();
        $middleware->checkLogin();
        $contactModel= new ContactModel();
        $data=$contactModel->first() ?? (object)[];
        return view('admin/contact/index',compact('data'));
    }

    public function add()
    {
        $middleware=new LoginMiddleware();
        $middleware->checkLogin();

        $validation=new Validation();
        $contactModel= new ContactModel();

        $address=$validation->name('address')->value(postData('address'))->result();
        $map=$validation->name('text')->value(postData('map'))->result();
        $phone=$validation->name('phone')->value(postData('phone'))->result();
        $email=$validation->name('email')->value(postData('email'))->result();
        $instagram=$validation->name('text')->value(postData('instagram'))->result();
        $youtube=$validation->name('text')->value(postData('youtube'))->result();

        $data=[
            'address'=>$address,
            'map'=>$map,
            'phone'=>$phone,
            'email'=>$email,
            'instagram'=>$instagram,
            'youtube'=>$youtube
        ];

        if(!$validation->isSuccess()){
            $result['error']=$validation->displayErrors();
            return view('admin/contact/index',compact('data','result'));
        }

        $contact=$contactModel->first();


        if(!$contact){
            $contactModel->create($data);
        }
        else{
            $contactModel->setWhere('id',$contact['id'],'=')->update($data);
        }

        return redirect('admin/contact');
    }

    public function contactform()
    {
        $middleware=new LoginMiddleware();
        $middleware->checkLogin();

        $contactformModel= new ContactformModel();
        $contactform=$contactformModel->all();

        return view('admin/contactform/index',compact('contactform') ?? null);
    }
    public function delete($id)
    {
        $middleware=new LoginMiddleware();
        $middleware->checkLogin();

        (new ContactformModel())->setWhere('id',(int)$id)->delete();

        return redirect('admin/contact');
    }
}