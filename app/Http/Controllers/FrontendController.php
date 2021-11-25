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

    function grocery_store(){
      return view('Dashboard.frontend.grocery_store');
    }

    function customer_profile(){
      return view('Dashboard.frontend.customer_profile');
    }

    function company_profile(){
      return view('Dashboard.frontend.company_profile');
    }

    function grocery_summary(){
      return view('Dashboard.frontend.grocery_summary');
    }

    function discount_table(){
      return view('Dashboard.frontend.discount_table');
    }

}
