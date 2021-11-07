<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            'title' => 'Product Category',
            'categories' => Category::all() 
        ]);
    }

    public function show(Category $category)
    {
        return view('products', [
            'title' => "Product By Category : $category->name",
            'products' => $category->product->load('author', 'category'),
            'category' => $category->name
        ]);
    }
} 
