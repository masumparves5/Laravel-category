<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;
use App\Models\CategoryModel;

class CategoryController extends Controller
{
    public $categories, $products;
    public function __construct()
    {
        $this->categories = CategoryModel::getAllCategories();
    }

    public function index()
    {
        return view('home', [
            'categories' =>$this->categories
        ]);
    }
    public function category($id)
    {
        $this->products =ProductModel::productByCategory($id);
        return view('category', [
            'categories' =>$this->categories,
            'products'  =>$this->products
        ]);
    }
}
