<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index(){
        return view('backend.index');
    }
    // to prevint visit /dashboard unregister user (its work in only dashboard page), but we will use middleware to prevent all unlogein user any dashboard page 
    // public function index(){
    //     // Check if the user is authenticated
    //     if (!auth()->check()) {
    //         // User is not logged in, redirect to login page
    //         return redirect()->route('login');
    //     }
    
    //     // User is authenticated, render the view
    //     return view('backend.index');
    // }
    
}
