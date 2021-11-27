<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserRegistration;
use App\Models\Category;
use Auth;
class FrontendController extends Controller
{

    //

    //custom login view
    function register_view(){
      return view('Dashboard.admin.admin_register');
    }
    function login_view(){
      return view('Dashboard.admin.admin_login');
    }

    //End custom login view
    function user_index(){
      return view('Dashboard.frontend.index');
    }

    function user_home(){

      $cards=UserRegistration::where('name', Auth::user()->id)->get();
      // $cards=UserRegistration::all();
      $category=Category::all();
      return view('Dashboard.frontend.customer_home',compact('cards','category'));
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
      $cards=UserRegistration::where('name', Auth::user()->id)->get();
      $category=Category::all();
      return view('Dashboard.frontend.grocery_summary',compact('cards','category'));
    }

    function discount_table(){
      return view('Dashboard.frontend.discount_table');
    }

}
