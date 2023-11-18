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
}
