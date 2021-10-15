<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index ()
    {
        $categories = Category::withDepth()->having('depth', '>', 0)->defaultOrder()->get()->toFlatTree();
        $categoriesSelect = Category::withDepth()->defaultOrder()->get()->toFlatTree();
        $categoriesUlList = Category::withDepth()->having('depth', '>', 0)->defaultOrder()->get()->toTree();
        $data = [
            'categories' => $categories,
            'categoriesSelect' => $categoriesSelect,
            'categoriesUlList' => $categoriesUlList
        ];
        return view ('category.index', $data);
    }

    public function move (Request $request, $id, $type)
    {
        $node = Category::find($id);
        if ($node) {
            if ($type == 'up') {
                $node->up();
            } elseif ($type == 'down') {
                $node->down();
            }
        }
        return redirect()->back();
    }
}
