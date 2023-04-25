<?php

namespace App\Controller;

use App\Models\BlogModel;
use Core\FileService;
use Core\Validation;
use Core\LoginMiddleware;


class BlogController
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
        $blogModel= new BlogModel();
        $blogs=$blogModel->all();

        return view('admin/blog/index',compact('blogs') ?? null);
    }

    public function create()
    {
        return view('admin/blog/form',['blog'=>null]);
    }
    public function add()
    {
        $validation=new Validation();

        $title=postData('title');
        $text=postData('text');
        $slag=postData('slag');

        if(!$validation->isSuccess()){
            $data=[
                'title'=>$title,
                'text'=>$text,
                'slag'=>$slag
            ];
            $result['error']=$validation->displayErrors();
            return view('admin/blog/create',compact('data','result'));
        }

        $blogModel= new BlogModel();

        $this->fileService->checkFile('image');

            if (!$this->fileService->validateType('image',['png','jpg','jpeg'])){
                throw  \Exception('file incorrect');
            }

            $fileName=$this->fileService->upload('image');

            $blogModel->create([
                'title'=>$title,
                'text'=>$text,
                'date'=>date("Y/m/d"),
                'slag'=>$slag,
                'image'=>$fileName
            ]);


        return redirect('admin/blog');
    }

    public function edit($id)
    {
        $blog=(new BlogModel())->setWhere('id',(int)$id)->first();
        if($blog){
            return view('admin/blog/form',['blog'=>$blog]);
        }
    }

    public function update($id)
    {
        $blog=(new BlogModel())->setWhere('id',(int)$id)->first();
        if(!$blog){
            throw new \Exception('no data');
        }
        $title=postData('title');
        $text=postData('text');
        $slag=postData('slag');
        $date=date("Y/m/d");


        $data=[
            'title'=>$title,
            'text'=>$text,
            'date'=>$date,
            'slag'=>$slag,
        ];

        if($this->fileService->hasFile('image') ){
            if (!$this->fileService->validateType('image',['png','jpg','jpeg'])){
                throw  \Exception('file incorrect');
            }
            $fileName=$this->fileService->replace('image',$blog['image']);
            $data['image']=$fileName;
        }
        else{
            $data['image']=$blog['image'];
        }

        (new BlogModel())->setWhere('id',(int)$id)->update($data);

        return redirect('admin/blog');
    }

    public function delete($id)
    {
        (new BlogModel())->setWhere('id',(int)$id)->delete();

        return redirect('admin/blog');
    }
}