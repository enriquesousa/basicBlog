<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function AdminDestroy(Request $request){

        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // $notification = array(
        //     'message' => 'Admin desconectado con éxito',
        //     'alert-type' => 'info'
        // );

        return redirect('/login'); //home page
        // return redirect('/logout')->with($notification); //login page
    }


}
