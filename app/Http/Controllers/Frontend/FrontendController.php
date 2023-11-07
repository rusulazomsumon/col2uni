<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //homepage return
    public function index(){
        return view('frontend.modules.index');
    }
}
