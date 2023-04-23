<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.index',[
            'posts' => post::where('user_id',auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => "required| min :5",
            'price' => 'required',
            'category_id'=> "required",
            'image' => "image|required",
            'body' => "required"
        ]);
        $validation['slug'] = Str::random(16);
        $validation['user_id'] = auth()->user()->id;
        $validation['image'] = $request->file('image')->store('imgStore');

        post::create($validation);

        
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($post)
    {
        return view('dashboard.edit', [
            "posts" =>  post::where('slug' , $post)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$post)
    {
        $validation = $request->validate([
            'name' => "required| min :5",
            'price' => 'required',
            'category_id'=> "required",
            'image' => "image",
            'body' => "required",
        ]);

        if($request->file('image')) {
            $imgOld = post::where('slug',$post)->first()->image;
            Storage::delete($imgOld);
            $validation['image'] = $request->file('image')->store('imgstore');
        }

        post::where('slug', $post)->update($validation);

        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($post)
    {
        post::where('id' , $post)->delete();
        return redirect('/dashboard');        
    }
}
