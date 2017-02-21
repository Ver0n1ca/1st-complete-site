<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class AccountController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	if ((Auth::user()->name)=='admin') {
    		return view('account.admin');
    	}
    	else
        	return view('account.mem');
    }
    public function memCom()
    {
        return view('account.com-mem');
    }
}
