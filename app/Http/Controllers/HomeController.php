<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function contact(Request $request){
        
        $contact=new Contact();
        $contact->username= $request->input('name');        
        $contact->email= $request->input('email');
        $contact->message= $request->input('msg');   
        if ($contact->save()) {
            return "Success! I will come to see it soon";
        } 
        else 
            return "Oops, something went wrong.";       
    }
}
