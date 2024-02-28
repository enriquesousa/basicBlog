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

    // EditPortfolio
    public function EditPortfolio($id){
        $portfolio = Portfolio::findOrFail($id);
        return view('admin.portfolio.portfolio_edit', compact('portfolio'));
    }

    // UpdatePortfolio
    public function UpdatePortfolio(Request $request)
    {
        $portfolio_id = $request->id;
        $old_image = $request->old_image;

        // Si hay imagen update con la imagen
        if ($request->file('portfolio_image')) {

            $imagen = $request->file('portfolio_image');

            // $old_image regresa "upload/portfolio/1780653224833182.jpg"
            unlink(public_path($old_image)); // para borrar la imagen anterior

            $name_gen = hexdec(uniqid()) . '.' . $imagen->getClientOriginalExtension();

            // Creamos un objeto Image a partir de Intervention Image
            $image = ImageManager::imagick()->read($imagen)->resize(1020, 519)->save('upload/portfolio/' . $name_gen);

            $save_url = 'upload/portfolio/' . $name_gen;

            Portfolio::findOrFail($portfolio_id)->update([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_description' => $request->portfolio_description,
                'portfolio_image' => $save_url,
                'updated_at' => Carbon::now(),
            ]);

            // toastr notification
            $notification = array(
                'message' => 'Portafolio con Imagen actualizado correctamente',
                'alert-type' => 'success'
            );

            return redirect()->route('all.portfolio')->with($notification);

        } else {

            // Si no hay imagen update sin la imagen

            Portfolio::findOrFail($portfolio_id)->update([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_description' => $request->portfolio_description,
                'updated_at' => Carbon::now(),
            ]);

            // toastr notification
            $notification = array(
                'message' => 'Portafolio sin Imagen actualizado correctamente',
                'alert-type' => 'success'
            );

            return redirect()->route('all.portfolio')->with($notification);

        }
       
    }

    // DeletePortfolio
    public function DeletePortfolio($id){

        $portfolio = Portfolio::findOrFail($id);
        unlink(public_path($portfolio->portfolio_image)); // para borrar la imagen anterior

        Portfolio::findOrFail($id)->delete();

        // toastr notification
        $notification = array(
            'message' => 'Portafolio eliminado correctamente',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    // DetailsPortfolio
    public function DetailsPortfolio($id){
        $portfolio = Portfolio::findOrFail($id);
        return view('frontend.portfolio_details', compact('portfolio'));
    }

    
    // *****************
    // Para el Frontend
    // *****************

    // HomePortfolio
    public function HomePortfolio(){
        $allPortfolios = Portfolio::orderBy('id', 'DESC')->get();
        return view('frontend.home_all_portfolio', compact('allPortfolios'));
    }



}
