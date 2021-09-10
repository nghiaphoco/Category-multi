<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index ()
    {
        $categories = Category::whereNull('parent_id')->with('categories')->get();
        return view ('category.index', compact('categories'));
    }
}
