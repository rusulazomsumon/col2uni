<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\PostCreateRequest;
use Illuminate\Support\Str;
use Carbon\Carbon;




class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('backend.modules.post.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // sending category for post form
        $categories = Category::where('status', 1)->pluck('name','id');
        return view('backend.modules.post.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // using PostCreateRequest, for validatation
    // public function store(PostCreateRequest $request)
    // {
          // Get the data from the form
        //   $post_data = $request->all();
        //   dd($post_data);
        // photo preparation
        // if($request->hasFile('photo')){
        //     $file = $request->file('photo');
        //     $name = Str::slug($request->input('slug'));
        //     $height = 400;
        //     $width = 1000;
        //     $thumb_height = 150;
        //     $thumb_width = 300;
        //     $path = 'image/post/original';
        //     $thumb_path = 'image/post/thumbnail';
        //     // for image preparation Laravel Intervention Image
        //     $post_data['photo'] = PhotouploadController::imageUpload($name, $height, $width, $path, $file);
        //     PhotouploadController::imageUpload($name, $thumb_height, $thumb_width, $thumb_path, $file);

        // }
    // }
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
