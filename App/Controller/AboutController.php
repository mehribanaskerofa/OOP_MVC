<?php

namespace App\Controller;

use App\Models\AboutModel;
use Core\FileService;
use Core\Validation;
use Core\LoginMiddleware;


class AboutController
{
    private FileService $fileService;

    public function __construct()
    {
        $middleware=new LoginMiddleware();
        $middleware->checkLogin();
        $this->fileService=new FileService();
    }

    public function index()
    {
        $aboutModel= new AboutModel();
        $data=$aboutModel->first() ?? (object)[];
        return view('admin/about/index',compact('data'));
    }

    public function add()
    {
        $validation=new Validation();
        $aboutModel= new AboutModel();

        $title=$validation->name('text')->value(postData('title'))->result();
        $text=$validation->name('text')->value(postData('text'))->result();
        $button=$validation->name('text')->value(postData('button'))->max(7)->result();
        $image=$validation->name('file')->value(postData('image'))->result();

        $data=[
            'title'=>$title,
            'text'=>$text,
            'button'=>$button,
            'image'=>$image
        ];

        if(!$validation->isSuccess()){
            $result['error']=$validation->displayErrors();
            return view('admin/about/index',compact('data','result'));
        }

        $about=$aboutModel->first();

        if(!($data['image']==$about['image']) || $this->fileService->hasFile('image')){
            if (!$this->fileService->validateType('image',['png','jpg','jpeg'])){
                throw  \Exception('file incorrect');
            }

            $fileName=$this->fileService->upload('image');
            $data['image']=$fileName;
        }

        if(!$about){
            $aboutModel->create($data);
        }
        else{

            if($data['image']!=$about['image'] && $this->fileService->hasFile('image')) {
                $this->fileService->delete($about['image']);
            }

            $aboutModel->setWhere('id',$about['id'],'=')->update($data);
        }

        return redirect('admin/about');
    }
}