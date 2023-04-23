<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class postController extends Controller
{
    public function show($post)
    {
        return view('post', [
            "posts"=>post::where('slug' , $post)->first()
        ]);
    }
}
