<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserRegistration;
use App\Models\Customer;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\ExistUser;
use App\Models\Discount_store;
use App\Models\Grocery_store;
use Carbon\Carbon;
use Image;
class DashboardController extends Controller
{
    //
    function index(){
      return view('Dashboard.admin_dashboard');
    }
//begin UserRegistration
    function add_user_form(){
      $categories = Category::all();
      $sub_categories = Subcategory::all();
      return view('Dashboard.user.add_user',compact('categories','sub_categories'));
      }

      function add_user_formv1(){
        $categories = Category::all();
        $sub_categories = Subcategory::all();
        return view('Dashboard.user.add_userv1',compact('categories','sub_categories'));
        }

    function post_user_information(Request $request){
      $last_inserted_id=UserRegistration::insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'card_name'=>$request->card_name,
        'card_number'=>$request->card_number,
        'card_ammount'=>$request->card_ammount,
        'account'=>$request->account,
        'address'=>$request->address,
        'photo'=>$request->photo,
        'created_at'   =>Carbon::now()
      ]);
      if ($request->hasFile('photo')) {
          $photo_upload     =  $request ->photo;
          $photo_extension  =  $photo_upload -> getClientOriginalExtension();
          $photo_name       =  "i_need_user".$last_inserted_id. "." . $photo_extension;
          Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/users/'.$photo_name),100);

            }
      return back();
    }
//end UserRegistration


    public  function get_subcategory(Request $request)
      {

      //  echo "shakil";
          $x = Subcategory::where('category_id',$request->main_category_id)->get();

          $dataSend ='';
          foreach ($x as $xs) {
            $dataSend .= "<option value='$xs->id'>$xs->subcategory_card_number</option>";
          }

          return $dataSend;
      }



    function view_user(){
      $lists=UserRegistration::all();
      return view('Dashboard.view_user',compact('lists'));
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

    function view_discount_store($id){
      $lists=Discount_store::all();
      $p=User::where($id->discount);
      $k=Discount_store::where($id->price);
      $a=$p*$k;
      return view('Dashboard.view_discount_store',compact('lists','a'));
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
