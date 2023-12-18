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
        $viewData = [];
        $viewData['title'] = "About us - Just Another Online Store";
        $viewData['subtitle'] = "About us";
        $viewData["description"] = "This is an about us page...";
        $viewData["author"] = "Developed by: AJ Javadi.";
        return view('home.about')->with("viewData", $viewData);

    }
}



?>
