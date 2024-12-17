<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
   public  function homepage(){

    return view('/homepage');
   }

   public function contactUs(){
      return view('contactUs');
   }

   public function submit(Request $request){

       $name= $request->input('name');
       $email= $request->input('email');
       $message= $request->input('message');

       Mail::to($email)->send(new ContactMail($name ,$email, $message));

       return redirect()->route('homepage')->with('status', 'Mail inviata con successo');


     

     
   }
}
