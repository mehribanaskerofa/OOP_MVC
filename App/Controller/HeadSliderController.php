<?php

namespace App\Controller;
use App\Models\HeadSliderModel;
use Core\FileService;
use Core\Validation;
use Core\LoginMiddleware;


class HeadSliderController
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
        $sliderModel= new HeadSliderModel();
        $headslider=$sliderModel->first() ?? (object)[];
        return view('admin/headslider',compact('headslider'));
    }

    public function add()
    {
        $sliderModel= new HeadSliderModel();
        $title=postData('title');
        $text=postData('text');
        $slider=$sliderModel->first();

        $data=[
            'title'=>$title,
            'text'=>$text
        ];


        if($this->fileService->hasFile('image') ){

            if (!$this->fileService->validateType('image',['png','jpg','jpeg'])){

            throw  \Exception('file incorrect');

                }

            $fileName=$this->fileService->upload('image');
            $data['image']=$fileName;

            }
        else{
            $data['image']=$slider['image'];
            }




        if(!$slider){
            $sliderModel->create($data);
        }
        else{

            if($this->fileService->hasFile('image')) {
                $this->fileService->delete($slider['image']);
            }

            $sliderModel->setWhere('id',$slider['id'],'=')->update($data);
        }

        return redirect('admin/headslider');
    }
}