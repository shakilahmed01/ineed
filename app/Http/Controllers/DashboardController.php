<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use App\Models\Customer;
use App\Models\ExistUser;
use App\Models\Discount_store;
use App\Models\Grocery_store;
use Carbon\Carbon;
class DashboardController extends Controller
{
    //
    function view_user(){
      $lists=User::all();
      return view('dashboard.view_user',compact('lists'));
    }

    function profile(){
      return view('Dashboard.user_profile');
    }


    function customer(){
      return view('Dashboard.customer');
    }

    function add_customer(Request $request){
      Customer::insert([
        'name'=>$request->name,
        'email'=>$request->email,

        'created_at'            =>Carbon::now()
      ]);
      return back();
    }

    function grocery_store(){
      return view('Dashboard.grocery');
    }
    function add_grocery(Request $request){
      Grocery_store::insert([
        'store_name'=>$request->store_name,
        'store_location'=>$request->store_location,
        'card_name'=>$request->card_name,
        'card_quantity'=>$request->card_quantity,
        'card_ammount'=>$request->card_ammount,
        'account'=>$request->account,
        'created_at'   =>Carbon::now()
      ]);
      return back();
    }
    function view_grocery(){
      $lists=Grocery_store::all();
      return view('Dashboard.view_grocery',compact('lists'));
    }

    function discount_store(){
      return view('Dashboard.discount');
    }
    function add_discount(Request $request){
      Discount_store::insert([
        'store_name'=>$request->store_name,
        'store_location'=>$request->store_location,
        'phone'=>$request->phone,
        'price'=>$request->price,
        'created_at'   =>Carbon::now()
      ]);
      return back();
    }

    function view_discount_store(){
      $lists=Discount_store::all();
      return view('Dashboard.view_discount_store',compact('lists'));
    }

    function exist_user(){
      return view('Dashboard.user');
    }
    function add_user(Request $request){
      ExistUser::insert([
        'customer'=>$request->customer,
        'basic'=>$request->basic,
        'partner'=>$request->partner,
        'created_at'   =>Carbon::now()
      ]);
      return back();
    }

}
