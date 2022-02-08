<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;

class CategoryController extends Controller
{
        public function index(Category $category)
    {
        return view('categories')->with(['posts' => $category->getByCategory()]);
    }
}


