<?php
/*
 * @Author: AJ Javadi
 * @Email: amirjavadi25@gmail.com
 * @Date: 2023-12-19 12:05:04
 * @Last Modified by:   Someone
 * @Last Modified time: 2023-12-19 13:57:48
 * @Description: file:///Users/aj/sandbox/just-another-online-store/app/Http/Controllers/ProductController.php
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public static $products = [
        ["id"=>"1", "name"=>"TV","description"=>"Best TV", "image"=>"game.png","price"=>"$1000"],
        ["id"=>"2", "name"=>"iPhone","description"=>"Best iPhone", "image"=>"safe.png","price"=>"$999"],
        ["id"=>"3", "name"=>"Chromecast","description"=>"Best Chromecast", "image"=>"submarine.png","price"=>"$30"],
        ["id"=>"4", "name"=>"Glasses","description"=>"Best Glasses", "image"=>"game.png","price"=>"$100"]
    ];

    public function index()
    {
        $viewData = [];
        $viewData["title"]= "Products - Just Another Online Store";
        $viewData["subtitle" ]= "List of Products (and stuff) ";
        $viewData["products" ]= ProductController::$products;
        return view('product.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $product = ProductController::$products[$id-1]; // minus one because of array index
        $viewData["title"] = $product["name"]." - Just Another Online Store";
        $viewData["subtitle"] = $product["name"]. " - Product information";
        $viewData["product"] = $product;
        return view("product.show")->with("viewData", $viewData);
    }
}
