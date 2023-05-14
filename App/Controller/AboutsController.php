<?php

namespace App\Controller;

use App\Models\AboutModel;
use App\Models\HeadSliderModel;
use App\Models\ContactModel;


class AboutsController
{
    public function index()
    {
        $headslider=(new HeadSliderModel())->first();
        $about=(new AboutModel())->first();
        $contact=(new ContactModel())->first();

        return view('about',compact('about','headslider','contact'));
    }
}