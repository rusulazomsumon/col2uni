<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FrontendController extends Controller
{
    //homepage return
    public function index(){
        // *sending active categories to frontend using AppServiceProvider boot (boot need before start the application)
        // *for using this $categories = Category::where('status', 1)->orderBy('order_by', 'asc')->get(); we will able to use this query from everywhere on our website
        // sending post info for post grid and slider area
        $posts = Post::with('category','user')->where('status', 1)->latest()->paginate(20);
        // sending category wise post to show different category area 

  
        return view('frontend.modules.index', compact('posts'));
    }

    // single post
    public function single($slug){

    $post = Post::where('slug', $slug)->firstOrFail();
    $relatedPosts = Post::where('category_id', $post->category_id)
                       ->where('id', '!=', $post->id)
                       ->take(3)
                       ->get();

    return view('frontend.modules.single-post', ['post' => $post, 'relatedPosts' => $relatedPosts]);
}

    // category page
    public function category($slug){

        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = $category->posts()->paginate(10); 

        return view('frontend.modules.all-post', ['category' => $category, 'posts' => $posts]);
    }

    // ek editor image uploader 
    public function uploadimage(Request $request){
        if($request->hasFile('upload')) {
            $originalName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originalName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName. '_' . time() . '.' . $extension;

            // saving to public/image folder
            $request->file('upload')->move(public_path('image'), $fileName);

            $url = asset('image/' . $fileName);

            return response()->json(['fileName' => $fileName, 'uploaded'=>1, 'url' => $url]);
        }
    }

}
