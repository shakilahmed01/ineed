<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    function user_index(){
      return view('Dashboard.frontend.index');
    }

    function user_home(){
      return view('Dashboard.frontend.customer_home');
    }
}
