<?php
/*
 * @Author: AJ Javadi
 * @Email: amirjavadi25@gmail.com
 * @Date: 2023-12-19 12:05:04
 * @Last Modified by:   Someone
 * @Last Modified time: 2023-12-19 20:27:06
 * @Description: file:///Users/aj/sandbox/just-another-online-store/app/Http/Controllers/ProductController.php
 */

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $viewData = [];
        $viewData['title'] = "Products - Just Another Online Store";
        $viewData['subtitle'] = "List of products";
        $viewData['products'] = Product::all();
        return view('product.index')->with("viewData", $viewData);
    }

    public function show($id) {

        $viewData = [];
        $product = Product::findOrFail($id);
        // $viewData['title'] = $product["name"]." - Just Another Online Store";
        $viewData["title"] = $product->getName(). " - Just Another Online Store";
        // $viewData['subtitle'] = $product["name"]." - Product Information";
        $viewData["subtitle"] = $product->getName()." - Product Information";
        $viewData["product"]= $product;
        return view("product.show")->with("viewData", $viewData);

    }



// -------------------- FIN
}
