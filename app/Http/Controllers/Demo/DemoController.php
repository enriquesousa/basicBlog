<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    
    // HomeMain
    public function HomeMain(){
       return view('frontend.index');
    }



}
