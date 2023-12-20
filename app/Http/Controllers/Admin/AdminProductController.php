<?php


namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AdminProductController extends Controller {


    // index
    public function index() {
        $viewData = [];
        $viewData["title"] = "Admin Page - Products - Just Another Online Store";
        $viewData["products"] = Product::all();

        return view("admin.product.index")->with("viewData", $viewData);
    }

    
}








// ================= FIN

?>
