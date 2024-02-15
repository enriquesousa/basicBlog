<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\HomeSlide;

use Intervention\Image\ImageManager;


class HomeSliderController extends Controller
{
    // HomeSlider
    public function HomeSlider()
    {

        $homeSlide = HomeSlide::find(1);
        return view('admin.home_slide.home_slide_all', compact('homeSlide'));
    }

    // UpdateSlider
    public function UpdateSlider(Request $request)
    {

        $slide_id = $request->id;

        // Si hay imagen update con la imagen
        if ($request->file('home_slide')) {

            $imagen = $request->file('home_slide');
            $name_gen = hexdec(uniqid()) . '.' . $imagen->getClientOriginalExtension();

            // Creamos un objeto Image a partir de Intervention Image
            $image = ImageManager::imagick()->read($imagen)->resize(636, 852)->save('upload/home_slide/' . $name_gen);

            $save_url = 'upload/home_slide/' . $name_gen;

            HomeSlide::findOrFail($slide_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'video_url' => $request->video_url,
                'home_slide' => $save_url,
            ]);

            // toastr notification
            $notification = array(
                'message' => 'Home Slide con Imagen actualizado correctamente',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);

        } else {

            // Si no hay imagen update sin la imagen

            HomeSlide::findOrFail($slide_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'video_url' => $request->video_url,
            ]);

            // toastr notification
            $notification = array(
                'message' => 'Home Slide sin Imagen actualizado correctamente',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);

        } 

    }





}
