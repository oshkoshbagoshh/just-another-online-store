<?php

/*
 * @Author: AJ Javadi
 * @Email: amirjavadi25@gmail.com
 * @Date: 2023-12-21 01:06:43
 * @Last Modified by:   Someone
 * @Last Modified time: 2023-12-21 01:21:43
 * @Description: file:///Users/aj/sandbox/just-another-online-store/app/Http/Controllers/CartController.php
 */


namespace App\Http\Controllers;

use App\Models\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;


//  Shopping Cart Class
class CartController extends Controller

{
    public function index(Request $request)
    {
        $total = 0; // initialize the total
        $productsInCart = []; // initialize the cart

        $productsInSession = $request->session()->get("products");
        if ($productsInSession) {
            $productsInCart = Product::findMany(array_keys($productsInSession));
            $total = Product::sumPricesByQuantities($productsInCart, $productsInSession);
        }

        // ======================
        $viewData = [];
        $viewData["title"] = "Cart - JAOS";
        $viewData["subtitle"] = "Shopping Cart";
        $viewData["total"] = $total;
        $viewData["products"] = $productsInCart;
        return view('cart.index')->with("viewData", $viewData);
    }

    // add to shopping cart method

    public function add(Request $request, $id)

    {
        $products = $request->session()->get("products");
        $products[$id] = $request->input("quantity");
        $request->session()->put('products', $products);

        return redirect()->route('cart.index');
    }


    // delete method

    public function delete(Request $request)

    {
        $request->session()->forget('products');
        return back();
    }
}
