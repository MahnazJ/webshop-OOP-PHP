<?php

namespace App\Controllers;

use App\Libraries\View;

class AboutUsController
{
    public function index()
    {
        return View::render('site/aboutus.view');
    }

    public function store()
    {
        
    }
}