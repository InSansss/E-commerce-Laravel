<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class categoryController extends Controller
{
    public function category(Category $category)
    {
        return view('categories.post',[
            "posts"=>$category->post,
            "title"=>$category->name
        ]);
    }
}
