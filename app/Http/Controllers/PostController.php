<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\PostCreateRequest;
use App\Http\Requests\PostUpdateRequest;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PhotouploadController;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // post list show 10 posts per pej
        $posts = Post::with('category', 'user')->latest()->paginate(10);
        return view('backend.modules.post.index', compact('posts'));

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
    public function store(PostCreateRequest $request)
    {
        $post_data = $request->except(['photo','slug']);
        $post_data['slug'] = Str::slug($request->input('slug'));
        $post_data['user_id'] = Auth::user()->id;
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $name = Str::slug($request->input('slug'));
            $height = 400;
            $width = 1000;
            $thumb_height = 150;
            $thumb_width = 300;
            $path = 'post/original/';
            $thumb_path = 'post/thumbnail/';
            // for image preparation Laravel Intervention Image
            $post_data['photo'] = PhotouploadController::imageUpload($name, $height, $width, $path, $file);
            PhotouploadController::imageUpload($name, $thumb_height, $thumb_width, $thumb_path, $file);

        }
        // saving post to database using model
        $post = Post::create($post_data);
        // sucessfull notification 
        session()->flash('cls','success');
        session()->flash('msg','পোস্টটি সফলভাবে লেখা হয়েছে!');
        return redirect()->route('post.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post->load(['category', 'user']);
        return view('backend.modules.post.show', compact('post'));
    
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::where('status', 1)->pluck('name','id');
        return view('backend.modules.post.edit', compact('post', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, Post $post)
    {
        $post_data = $request->except(['photo','slug']);
        $post_data['slug'] = Str::slug($request->input('slug'));
        $post_data['user_id'] = Auth::user()->id;

        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $name = Str::slug($request->input('slug'));
            $height = 400;
            $width = 1000;
            $thumb_height = 150;
            $thumb_width = 300;
            $path = 'post/original/';
            $thumb_path = 'post/thumbnail/';
            // unlink if there is  image
            PhotouploadController::imageUnlink($path, $post->photo);
            PhotouploadController::imageUnlink($thumb_path, $post->photo);
            // for image preparation Laravel Intervention Image
            $post_data['photo'] = PhotouploadController::imageUpload($name, $height, $width, $path, $file);
            PhotouploadController::imageUpload($name, $thumb_height, $thumb_width, $thumb_path, $file);
           
        }
        // saving post to database using model
        $post->update($post_data);
        session()->flash('cls','success');
        session()->flash('msg','পোস্টটি আপডেট হয়েছে!');
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $path = 'post/original/';
        $thumb_path = 'post/thumbnail/';
        // unlink if there is  image
        PhotouploadController::imageUnlink($path, $post->photo);
        PhotouploadController::imageUnlink($thumb_path, $post->photo);
        $post->delete();
        //  delete notification
         session()->flash('cls','success');
         session()->flash('msg','পোস্টটি ডিলিট হয়েছে!');
         return redirect()->route('post.index');
    }
}
