<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AdminController extends Controller
{
    // AdminDestroy
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

    // AdminProfile
    public function AdminProfile(){

        $id = Auth::user()->id;
        $adminData = User::findOrFail($id);
        return view('admin.admin_profile_view', compact('adminData'));
    }


}
