<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use Mail;

class ContactUsController extends Controller
{
  public function index(){
    return view('contact');
  }

  public function contactUSPost(Request $request){
    $this->validate($request,[
      'name'=>'required',
      'email'=>'required | email',
      'message'=>'required'
    ]);

    ContactUS::create($request->all());

    Mail::send('email',
       array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'user_message' => $request->get('message')
       ), function($message)
   {
       $message->from('lushluxurytravel@gmail.com');
       $message->to('lushluxurytravel@gmail.com', 'Admin')->subject('Customer Feedback');
   });



    return back()->with('success', 'Thanks for contacting us! A member of our team will get in touch within the next 48hs.');
  }
}
