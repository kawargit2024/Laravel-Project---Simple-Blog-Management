<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::query()
        ->where("user_id", request()->user()->id )
        ->orderby('created_at','DESC')->paginate(10); // defalult value 15
        // echo "<pre>";
        // dd($blogs);
        //  echo "<pre>";
        return view('blog.index',[
          "blogs" => $blogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('blog.create'); // create.blade.php
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "title"=> 'required|string',
            "description"=> 'required|string'
        ]);

        $data["user_id"] = request()->user()->id;
        Blog::create($data);

        return to_route('blog.index')->with('success','Blog Create Successfully');

        // echo "<pre>";
        // var_dump($data);
        // echo "<pre>";
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
       return view('blog.show',[
         'blog' => $blog 
       ]);  // show.blade.php
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    { 
        return view('blog.edit',[
         'blog'=>$blog
        ]); // edit.blade.php
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
       $data = $request->validate([
        "title" => "required|string",
        "description" => "required|string"
       ]);

       $blog->update($data);
       return to_route('blog.show',$blog)->with("success","Blog Updata Successfully");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return to_route('blog.index')->with("success","Blog Delete Successfully");
    }
}
