<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\About;
use Intervention\Image\ImageManager;

class AboutController extends Controller
{
    // AboutPage
    public function AboutPage()
    {
        $aboutPage = About::findOrFail(1);
        return view('admin.about_page.about_page_all', compact('aboutPage'));
    }




}
