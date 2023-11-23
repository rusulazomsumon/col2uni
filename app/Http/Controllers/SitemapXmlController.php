<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;

use Illuminate\Http\Request;


class SitemapXmlController extends Controller
{
    public function index()
    {
        return response()->view('sitemap', [
            'posts' => Post::latest('created_at')->get(),
        ])->header('Content-Type', 'text/xml');
        
    }
}
