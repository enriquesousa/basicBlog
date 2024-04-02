<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Footer;

class FooterController extends Controller
{
    // FooterSetup
    public function FooterSetup(){
        $dataFooter = Footer::find(1);
        return view('admin.footer.footer_all', compact('dataFooter'));
    }

    // FooterUpdate
    public function FooterUpdate(Request $request){

        $request->validate([
            'number' => 'required',
            'email' => 'required',
            'address' => 'required',
            'short_description' => 'required',
            'copyright' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
        ]);
        
        $footer_id = $request->id;

        Footer::findOrFail($footer_id)->update([
            'number' => $request->number,
            'email' => $request->email,
            'address' => $request->address,
            'short_description' => $request->short_description,
            'copyright' => $request->copyright,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
        ]);

        // toastr notification
        $notification = array(
            'message' => 'Footer actualizado correctamente',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }


}
