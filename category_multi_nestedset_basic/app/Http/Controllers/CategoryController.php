<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index ()
    {
        $categories = Category::withDepth()->having('depth', '>', 0)->get()->toFlatTree();
        $categoriesSelect = Category::withDepth()->get()->toFlatTree();
        $data = [
            'categories' => $categories,
            'categoriesSelect' => $categoriesSelect
        ];
        return view ('category.index', $data);
    }
}
