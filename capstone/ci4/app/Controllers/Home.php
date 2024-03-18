<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function service()
    {
        return view('service');
    }
    public function project()
    {
        return view('project');
    }
    public function contact()
    {
        return view('contact');
    }
    public function feature()
    {
        return view('feature');
    }
    public function quote()
    {
        return view('quote');
    }
    public function team()
    {
        return view('team');
    }
    public function testimonial()
    {
        return view('testimonial');
    }
    public function error()
    {
        return view('404');
    }
    // public function dash()
    // {
    //     return view('dashboard/dash'); 
    // }
}
