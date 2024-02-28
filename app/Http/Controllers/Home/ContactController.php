<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Contact;
use Illuminate\Support\Carbon;

class ContactController extends Controller
{

    // ContactForm
    public function ContactForm(){
        return view('frontend.contact');
    }

    // StoreMessage
    public function StoreMessage(Request $request){

        // $data = new Contact();
        // $data->name = $request->name;
        // $data->email = $request->email;
        // $data->subject = $request->subject;
        // $data->message = $request->message;
        // $data->save();

        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);


        $notification = array(
            'message' => 'Tu mensaje ha sido enviado',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    // AdminContactMessage
    public function AdminContactMessage(){
        $contact = Contact::all();
        return view('admin.contact.index',compact('contact'));
    }


    // AdminContactDetails
    public function AdminContactDetails($id){
        $contact = Contact::findOrFail($id);
        return view('admin.contact.details',compact('contact'));
    }


    // DeleteContactMessage
    public function DeleteContactMessage($id){

        Contact::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Mensaje eliminada correctamente',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);

    }


}
