<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
class CategoryController extends Controller
{
    public function showProducts($id){

        $category = Category::find($id);
        $products = $category->products;
        dd($products);
    }
}
