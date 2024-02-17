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


    // UpdateAbout
    public function UpdateAbout(Request $request){

        $about_id = $request->id;

         // Si hay imagen update con la imagen
         if ($request->file('about_image')) {

            $imagen = $request->file('about_image');
            $name_gen = hexdec(uniqid()) . '.' . $imagen->getClientOriginalExtension();

            // Creamos un objeto Image a partir de Intervention Image
            $image = ImageManager::imagick()->read($imagen)->resize(523, 605)->save('upload/home_about/' . $name_gen);

            $save_url = 'upload/home_about/' . $name_gen;

            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'about_image' => $save_url,
            ]);

            // toastr notification
            $notification = array(
                'message' => 'About Page con Imagen actualizado correctamente',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);

        } else {

            // Si no hay imagen update sin la imagen

            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
            ]);

            // toastr notification
            $notification = array(
                'message' => 'About Page sin Imagen actualizado correctamente',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);

        } 

    }

    // HomeAbout
    public function HomeAbout(){
        $aboutPage = About::findOrFail(1);
       return view('frontend.about_page', compact('aboutPage'));
    }


}
