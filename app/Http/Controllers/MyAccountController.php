<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

// My Account Controller
class MyAcccountController extends Controller
{
    // orders
    public function orders()
    {
        $viewData = [];
        $viewData['title'] = "My Orders - JAOS";
        $viewData['subtitle'] = 'My Orders - ' . Auth::user()->name; // add user name
        // $viewData['orders'] = Order::where('user_id', Auth::user()->getId())->get();

        // $viewData['orders'] = Order::where('user_id', Auth::user()->id)->get(); // get all orders
        // 2023-12-21 18:15:05

        // adding in eager loading
        $viewData['orders'] = Order::with('items.product')->where('user_id', Auth::id())->get();

        return view('myaccount.orders', $viewData);
    }
}
