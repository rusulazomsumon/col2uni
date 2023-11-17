<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class FrontendController extends Controller
{
    //homepage return
    public function index(){
        // sending active categories to frontend using AppServiceProvider boot (boot need before start the application)
        
        // for using this $categories = Category::where('status', 1)->orderBy('order_by', 'asc')->get(); we will able to use this query from everywhere on our website
        return view('frontend.modules.index');
    }
    //single blog return
    public function single(){
        return view('frontend.modules.single-post');
    }
}
