<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\UserRegistration;
use App\Models\Customer;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\ExistUser;
use App\Models\Discount_store;
use App\Models\Grocery_store;
use App\Models\Payments;
use App\Models\Become_merchant;
use Carbon\Carbon;
use Image;
class DashboardController extends Controller
{

    public function __construct(){
      $this->middleware('auth');
      $this->middleware('role');
    }

    //custom login view
    function register_view(){
      return view('Dashboard.admin.admin_register');
    }
    function login_view(){
      return view('Dashboard.admin.admin_login');
    }

    //End custom login view


  public function index(){
    $users=UserRegistration::all()->count();
    $discount=Category::all()->count();
    $grocery_store=Grocery_store::all()->count();
    $discount_store=Discount_store::all()->count();
      return view('Dashboard.admin_dashboard',compact('users','discount','grocery_store','discount_store'));
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

      $user=UserRegistration::insertGetId([
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
          $photo_name       =  "i_need_user_". $user . "." . $photo_extension;
          Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/users/'.$photo_name),100);
          UserRegistration::find($user)->update([
          'photo'          => $photo_name,
              ]);
            }
      return back()->with('success','User have successfully registered.');
    }

    function user_edit($id){

        $list=UserRegistration::findOrFail($id);
        return view('Dashboard.user.single_user_list',compact('list'));
      }
      function user_update(Request $request){

        $user=UserRegistration::findOrFail($request->id)->update([
          'name'=>$request->name,
          'email'=>$request->email,
          'phone'=>$request->phone,
          'card_name'=>$request->card_name,
          'card_number'=>$request->card_number,
          'card_ammount'=>$request->card_ammount,
          'account'=>$request->account,
          'address'=>$request->address,


        ]);


        if ($request->hasFile('photo')) {

            $photo_upload     =  $request ->photo;
            $photo_extension  =  $photo_upload -> getClientOriginalExtension();
            $photo_name       =  "i_need_user_". $user . "." . $photo_extension;
            Image::make($photo_upload)->resize(250,350)->save(base_path('public/uploads/users/'.$photo_name),100);
            UserRegistration::find($user)->update([
            'photo'          => $photo_name,
                ]);


              }
        return back();
      }
      function user_delete($id){
          $list=UserRegistration::findOrFail($id)->delete();
          return back();
        }
//end UserRegistration

//Ajax function
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

//end Ajax function

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


//begin Store
    function grocery_store(){
      return view('Dashboard.grocery_store.grocery');
    }
    function add_grocery(Request $request){
      $store=Grocery_store::insertGetId([
        'store_name'=>$request->store_name,
        'store_location'=>$request->store_location,
        'phone'=>$request->phone,
        'price'=>$request->price,
        'photo'=>$request->photo,
        'created_at'   =>Carbon::now()
      ]);
      if ($request->hasFile('photo')) {
          $photo_upload     =  $request ->photo;
          $photo_extension  =  $photo_upload -> getClientOriginalExtension();
          $photo_name       =  "i_need_grocery_store_". $store . "." . $photo_extension;
          Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/grocery_stores/'.$photo_name),100);
          Grocery_store::find($store)->update([
          'photo'          => $photo_name,
              ]);
            }
      return back()->with('success','Data have successfully Added.');
    }
    function view_grocery(){
      $lists=Grocery_store::all();
      return view('Dashboard.grocery_store.view_grocery_store',compact('lists'));
    }
    function grocery_edit($id){

        $list=Grocery_store::findOrFail($id);
        return view('Dashboard.grocery_store.single_grocery_store',compact('list'));
      }
      function grocery_update(Request $request){

        $store=Grocery_store::findOrFail($request->id)->update([
          'store_name'=>$request->store_name,
          'store_location'=>$request->store_location,
          'price'=>$request->price,
          'phone'=>$request->phone,


        ]);
        if ($request->hasFile('photo')) {

            $photo_upload     =  $request ->photo;
            $photo_extension  =  $photo_upload -> getClientOriginalExtension();
            $photo_name       =  "i_need_grocery_store_". $store . "." . $photo_extension;
            Image::make($photo_upload)->resize(250,350)->save(base_path('public/uploads/grocery_stores/'.$photo_name),100);
            Grocery_store::find($store)->update([
            'photo'          => $photo_name,
                ]);
              }
        return back();
      }
      function grocery_delete($id){
          $list=Grocery_store::findOrFail($id)->delete();
          return back();
        }

    function discount_store(){
      return view('Dashboard.discount_store.discount');
    }
    function add_discount(Request $request){

        $store=Discount_store::insertGetId([
          'store_name'=>$request->store_name,
          'store_location'=>$request->store_location,
          'phone'=>$request->phone,
          'price'=>$request->price,
          'photo'=>$request->photo,
          'created_at'   =>Carbon::now()
        ]);
        if ($request->hasFile('photo')) {
            $photo_upload     =  $request ->photo;
            $photo_extension  =  $photo_upload -> getClientOriginalExtension();
            $photo_name       =  "i_need_store_". $store . "." . $photo_extension;
            Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/stores/'.$photo_name),100);
            Discount_store::find($store)->update([
            'photo'          => $photo_name,
                ]);
              }
        return back()->with('success','Data have successfully Added.');

    }

    function view_discount_store(){
      $lists=Discount_store::all();



      return view('Dashboard.discount_store.view_discount_store',compact('lists'));
    }

    function dis_edit($id){

        $list=Discount_store::findOrFail($id);
        return view('Dashboard.discount_store.single_discount_store',compact('list'));
      }
      function dis_update(Request $request){

        $store=Discount_store::findOrFail($request->id)->update([
          'store_name'=>$request->store_name,
          'store_location'=>$request->store_location,
          'price'=>$request->price,
          'phone'=>$request->phone,


        ]);
        if ($request->hasFile('photo')) {

            $photo_upload     =  $request ->photo;
            $photo_extension  =  $photo_upload -> getClientOriginalExtension();
            $photo_name       =  "i_need_store_". $store . "." . $photo_extension;
            Image::make($photo_upload)->resize(250,350)->save(base_path('public/uploads/stores/'.$photo_name),100);
            Discount_store::find($store)->update([
            'photo'          => $photo_name,
                ]);
              }
        return back();
      }
      function dis_delete($id){
          $list=Discount_store::findOrFail($id)->delete();
          return back();
        }
//end store


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


//begin payments
     function payments(){
       $categories = Category::all();
       $sub_categories = Subcategory::all();
       return view('Dashboard.payments.payments_form',compact('categories','sub_categories'));
     }

     function add_payments(Request $request){
       $payment=Payments::insertGetId([
         'user_name'=>$request->user_name,
         'card_name'=>$request->card_name,
         'card_number'=>$request->card_number,
         'store_name'=>$request->store_name,
         'store_location'=>$request->store_location,
         'phone'=>$request->phone,
         'price'=>$request->price,
         'created_at'   =>Carbon::now()
       ]);
       return back();
     }


     function view_payments(){
       $lists=Payments::all();
       return view('Dashboard.payments.view_payments_form',compact('lists'));
     }

     function payment_update(Request $request){

       $payment=Payments::findOrFail($request->id)->update([
         'user_name'=>$request->user_name,
         'card_name'=>$request->card_name,
         'card_number'=>$request->card_number,
         'store_name'=>$request->store_name,
         'store_location'=>$request->store_location,
         'price'=>$request->price,
         'phone'=>$request->phone,


       ]);

       return back();
     }

     function payment_edit($id){

         $list=Payments::findOrFail($id);
         return view('Dashboard.payments.single_payments_form',compact('list'));
       }

       function payment_delete($id){
           $list=Payments::findOrFail($id)->delete();
           return back();
         }
//end payments

//begin become merchant
        function become_merchant(Request $request){
          $request->validate([

           'name'          =>'required',
           'email'         =>'required',
           'subject'      =>'required',
           'message'      =>'required',

         ]);

          $merchant=Become_merchant::insertGetId([
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message,
            'created_at'   =>Carbon::now()
          ]);
          return back()->with('success','Data have successfully Added. We will contact you soon!');
        }


        function view_become_merchant(){
          $lists=Become_merchant::all();
          return view('Dashboard.become_merchant.become_merchant_list',compact('lists'));
        }

        function become_merchant_delete($id){
            $list=Become_merchant::findOrFail($id)->delete();
            return back();
          }
//end become merchant
}
