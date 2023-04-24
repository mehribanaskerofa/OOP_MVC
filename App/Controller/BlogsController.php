<?php

namespace App\Controller;

use App\Models\BlogModel;
use App\Models\HeadSliderModel;
use App\Models\ContactModel;



class BlogsController
{
    public function index()
    {
        $headslider=(new HeadSliderModel())->first();
        $blogs=(new BlogModel())->all();

        return view('blogs',compact('blogs','headslider'));
    }
    public function blogdetail($id)
    {
        $headslider=(new HeadSliderModel())->first();
        $blog=(new BlogModel())->setWhere('id',(int)$id)->first();
        $contact=(new ContactModel())->first();
        return view('blogdetail',compact('blog','headslider','contact'));
    }
}