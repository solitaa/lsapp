<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        $title = "Welcome with";
        return view("index")->with('title', $title);
    }

    public function about()
    {
        $title = "About us";
        return view("about")->with('title', $title);
    }

    public function services()
    {
        $data = array(
            "titlenew" => 'services',
            "services" => ["Web Design", "Programming", "SEO"]
        );
        return view("services")->with($data);
    }
}
