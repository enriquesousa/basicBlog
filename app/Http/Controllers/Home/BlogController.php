<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;
use Intervention\Image\ImageManager;
use Illuminate\Support\Carbon;

class BlogController extends Controller
{
    // AllBlog
    public function AllBlog(){
        $blogs = Blog::latest()->get();
        return view('admin.blogs.all_blogs', compact('blogs'));
    }


    

}
