@extends('layouts.adminapp')
@section('content')
<body class="theme-blush">
<section class="content">
  <h1>Grocery Store Information</h1>



<form  method="POST" action="{{route('add_grocery')}}" enctype="multipart/form-data">
     @csrf


     <div class="form-group col-md-4">
       <label for="store_name">Store Name</label>
       <input type="name" name="store_name" class="form-control" id="store_name"  placeholder="Store Name">

     </div>


     <div class="form-group col-md-4">
       <label for="store_location">Store Location</label>
       <input type="name" name="store_location" class="form-control" id="store_name"  placeholder="Store Name">

     </div>


     <div class="form-group col-md-4">
       <label for="phone">Mobile Number</label>
       <input type="name" name="phone" class="form-control" id="phone"  placeholder="Mobile Number">

     </div>



     <div class="form-group col-md-4">
       <label for="price">Price</label>
       <input type="name" name="price" class="form-control" id="price"  placeholder="Price">

     </div>



      <div class="form-group form-float">
          <div class="card">
             <div class="header">
                 <h2>Feature Photo</h2>
             </div>
             <div class="body">
                 <input type="file" class="dropify" name="photo">
             </div>
         </div>
        </div>



        <div class="form-group">
            <div class="checkbox">
                <input id="checkbox" type="checkbox" name="form_checked">
                <label for="checkbox">I have read and accept the terms</label>
            </div>
        </div>
        <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>

    </form>
<a href="{{route('view_discount_store')}}"><button class="btn btn-primary">view</button></a>
</section>
</body>
@endsection
