<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\BlogCategory;
use Illuminate\Support\Carbon;

class BlogCategoryController extends Controller
{
    // AllBlogCategory
    public function AllBlogCategory(){
        $blogCategories = BlogCategory::latest()->get();
        return view('admin.blog_category.all_blog_category', compact('blogCategories'));
    }

    // AddBlogCategory
    public function AddBlogCategory(){
        return view('admin.blog_category.add_blog_category');
    }

    // StoreBlogCategory
    public function StoreBlogCategory(Request $request){

        $request->validate(
            [
                'blog_category' => 'required',
            ],
            [
                'blog_category.required' => 'El nombre de la categoría es requerido',
            ]
        );


        BlogCategory::insert([
            'blog_category' => $request->blog_category,
            'created_at' => Carbon::now(),
        ]);

        // toastr notification
        $notification = array(
            'message' => 'Categoría agregada correctamente',
            'alert-type' => 'success'
        );

        return redirect()->route('all.blog.category')->with($notification);
    }




}
