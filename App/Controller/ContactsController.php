<?php

namespace App\Controller;

use App\Models\ContactModel;
use App\Models\HeadSliderModel;
use App\Models\ContactformModel;
use Core\Validation;



class ContactsController
{
    public function index()
    {
        $headslider=(new HeadSliderModel())->first();
        $contact=(new ContactModel())->first();
        return view('contact', compact('contact','headslider'));
    }

    public function send()
    {

        $validation=new Validation();

        $name=$validation->name('text')->value(postData('name'))->result();
        $email=$validation->name('email')->value(postData('email'))->result();
        $subject=$validation->name('text')->value(postData('subject'))->result();
        $message=$validation->name('text')->value(postData('message'))->result();


        $data=[
            'name'=>$name,
            'email'=>$email,
            'subject'=>$subject,
            'message'=>$message
        ];
        if(!$validation->isSuccess()){

            $result['error']=$validation->displayErrors();
            return view('contact',compact('data','result'));
        }

        $contactformModel= new ContactformModel();

        $contactformModel->create($data);

        return redirect('');
    }
}