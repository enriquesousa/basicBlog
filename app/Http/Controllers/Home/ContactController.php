<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Contact;

class ContactController extends Controller
{
    
    // ContactForm
    public function ContactForm(){
        return view('frontend.contact');
    }


}
