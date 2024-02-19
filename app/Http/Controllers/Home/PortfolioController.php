<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Portfolio;
use Intervention\Image\ImageManager;
use Illuminate\Support\Carbon;

class PortfolioController extends Controller
{
    // AllPortfolio
    public function AllPortfolio()
    {
        $portfolios = Portfolio::latest()->get();
        return view('admin.portfolio.portfolio_all', compact('portfolios'));
    }

    // AddPortfolio
    public function AddPortfolio()
    {
        return view('admin.portfolio.portfolio_add');
    }

    // StorePortfolio
    public function StorePortfolio(Request $request)
    {

        $request->validate(
            [
                'portfolio_name' => 'required',
                'portfolio_title' => 'required',
                'portfolio_image' => 'required',
            ],
            [
                'portfolio_name.required' => 'El nombre del portafolio es requerido',
                'portfolio_title.required' => 'El título del portafolio es requerido',
                'portfolio_image.required' => 'La imagen del portafolio es requerida',
            ]
        );


        $imagen = $request->file('portfolio_image');
        $name_gen = hexdec(uniqid()) . '.' . $imagen->getClientOriginalExtension();

        // Creamos un objeto Image a partir de Intervention Image
        $image = ImageManager::imagick()->read($imagen)->resize(1020, 519)->save('upload/portfolio/' . $name_gen);

        $save_url = 'upload/portfolio/' . $name_gen;

        Portfolio::insert([
            'portfolio_name' => $request->portfolio_name,
            'portfolio_title' => $request->portfolio_title,
            'portfolio_description' => $request->portfolio_description,
            'portfolio_image' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        // toastr notification
        $notification = array(
            'message' => 'Portafolio con Imagen insertada correctamente',
            'alert-type' => 'success'
        );

        return redirect()->route('all.portfolio')->with($notification);
    }





}
