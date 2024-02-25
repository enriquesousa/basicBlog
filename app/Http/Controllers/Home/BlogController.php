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

    // EditBlog
    public function EditBlog($id){
        $blog = Blog::findOrFail($id);
        $blogCategories = BlogCategory::orderBy('blog_category', 'ASC')->get();
        return view('admin.blogs.edit_blog', compact('blog', 'blogCategories'));
    }

    // UpdateBlog
    public function UpdateBlog(Request $request){

        $blog_id = $request->id;
        $old_image = $request->old_image;

        // Si hay imagen update con la imagen
        if ($request->file('blog_image')) {

            $imagen = $request->file('blog_image');

            // $old_image regresa "upload/portfolio/1780653224833182.jpg"
            unlink(public_path($old_image)); // para borrar la imagen anterior

            $name_gen = hexdec(uniqid()) . '.' . $imagen->getClientOriginalExtension();

            // Creamos un objeto Image a partir de Intervention Image
            $image = ImageManager::imagick()->read($imagen)->resize(430, 327)->save('upload/blog/' . $name_gen);

            $save_url = 'upload/blog/' . $name_gen;

            Blog::findOrFail($blog_id)->update([
                'blog_category_id' => $request->blog_category_id,
                'blog_title' => $request->blog_title,
                'blog_tags' => $request->blog_tags,
                'blog_description' => $request->blog_description,
                'blog_image' => $save_url,
                'updated_at' => Carbon::now(),
            ]);

            // toastr notification
            $notification = array(
                'message' => 'Blog con Imagen actualizado correctamente',
                'alert-type' => 'success'
            );

            return redirect()->route('all.blog')->with($notification);

        } else {

            // Si no hay imagen update sin la imagen

            Blog::findOrFail($blog_id)->update([
                'blog_category_id' => $request->blog_category_id,
                'blog_title' => $request->blog_title,
                'blog_tags' => $request->blog_tags,
                'blog_description' => $request->blog_description,
                'updated_at' => Carbon::now(),
            ]);

            // toastr notification
            $notification = array(
                'message' => 'Blog sin Imagen actualizado correctamente',
                'alert-type' => 'success'
            );

            return redirect()->route('all.blog')->with($notification);

        }

    }


    // DeleteBlog
    public function DeleteBlog($id){

        $blog = Blog::findOrFail($id);
        unlink(public_path($blog->blog_image)); // para borrar la imagen anterior

        Blog::findOrFail($id)->delete();

        // toastr notification
        $notification = array(
            'message' => 'Blog eliminado correctamente',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }


    // BlogDetails
    public function BlogDetails($id){
        $allCategories = BlogCategory::orderBy('blog_category', 'ASC')->get();
        $allBlogs = Blog::latest()->limit(5)->get();
        $blog = Blog::findOrFail($id);
        return view('frontend.blog_details', compact('blog', 'allBlogs', 'allCategories'));
    }




}
