<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;


// Home Controller

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Just Another Online Store";
        return view('home.index')->with("viewData", $viewData);
    }



    // About Controller
    public function about()
    {
        $data1 = "About us - Just Another Online Store";
        $data2 = "About us";
        $description = "This is an about us page ...";
        $author = "Developed by: AJ Javadi";
        return view('home.about')->with("title", $data1)
            ->with("subtitle", $data2)
            ->with("description", $description)
            ->with("author", $author);
    }
}
