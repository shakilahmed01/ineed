<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserRegistration;
use App\Models\Category;
use App\Models\Grocery_store;
use App\Models\Discount_store;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         // return view('home');
        if(Auth::user()->role_id == 2){
          return redirect('/user/home');
        }
        else{
          return redirect('/admin/index');
        }
    }
}
