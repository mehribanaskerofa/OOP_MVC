<?php

namespace App\Controller;

use App\Models\AboutModel;
use App\Models\BlogModel;
use App\Models\HeadSliderModel;
use App\Models\ContactModel;




class HomeController
{
    public function index()
    {
        $about=(new AboutModel())->first();
        $blogs=( new BlogModel())->setLimit(2)->all();
        $headslider=(new HeadSliderModel())->first();
        $contact=(new ContactModel())->first();

        return view('home',[
            "headslider" => $headslider,
            "about" => $about,
            "contact" => $contact,
            "blogs" => $blogs
        ]);
    }
}