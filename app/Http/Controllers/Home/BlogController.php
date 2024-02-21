<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;
use App\Models\BlogCategory;
use Intervention\Image\ImageManager;
use Illuminate\Support\Carbon;

class BlogController extends Controller
{
    // AllBlog
    public function AllBlog(){
        $blogs = Blog::latest()->get();
        return view('admin.blogs.all_blogs', compact('blogs'));
    }

    // AddBlog
    public function AddBlog(){
        $blogCategories = BlogCategory::orderBy('blog_category', 'ASC')->get();
        return view('admin.blogs.add_blog', compact('blogCategories'));
    }

    // StoreBlog
    public function StoreBlog(Request $request){

        $request->validate([
            'blog_category_id' => 'required',
            'blog_title' => 'required',
            'blog_image' => 'required',
        ]);

        $imagen = $request->file('blog_image');
        $name_gen = hexdec(uniqid()) . '.' . $imagen->getClientOriginalExtension();

        // Creamos un objeto Image a partir de Intervention Image, resize para blog frontend
        $image = ImageManager::imagick()->read($imagen)->resize(430, 327)->save('upload/blog/' . $name_gen);

        $save_url = 'upload/blog/' . $name_gen;

        Blog::insert([
            'blog_category_id' => $request->blog_category_id,
            'blog_title' => $request->blog_title,
            'blog_tags' => $request->blog_tags,
            'blog_description' => $request->blog_description,
            'blog_image' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        // toastr notification
        $notification = array(
            'message' => 'Blog con Imagen insertada correctamente',
            'alert-type' => 'success'
        );

        return redirect()->route('all.blog')->with($notification);
       
    }



}
