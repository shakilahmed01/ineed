@extends('layouts.adminapp')

@section('content')
<body class="theme-blush">
<section class="container">


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Information Update') }}</div>

                <div class="body">

                <form  method="POST" action="{{route('user_update')}}" enctype="multipart/form-data">
                     @csrf

                 <div class="form-group form-float">
                   <input type="hidden" name="id" value="{{$list->id}}">
                   <label for="name">Name</label>
                            <input type="text" class="form-control" placeholder="User Name" name="name" value="{{$list->name}}" required>
                        </div>
                        <div class="form-group form-float">
                          <label for="email">Email</label>

                            <input type="text" class="form-control" placeholder="Email" name="email" value="{{$list->email}}" required>
                        </div>
                        <div class="form-group form-float">
                          <label for="phone">Mobile Number</label>

                            <input type="text" class="form-control" placeholder="User Phone" name="phone" value="{{$list->phone}}" required>
                        </div>


                        <div class="form-group form-float" >
                          <label for="card_name">Card Name</label>

                                  <input type="text" class="form-control" placeholder="card Name" name="card_name" value="{{$list->card_name}}" required>
                         </div>

                         <div class="form-group form-float">
                           <label for="card_number">Card Number</label>

                             <input type="text" class="form-control" placeholder="Card number" name="card_number" value="{{$list->card_number }}" required>
                         </div>


                        <div class="form-group form-float">
                          <label for="card_ammount">Card Ammount</label>

                            <input name="card_ammount"  placeholder="Amount" class="form-control no-resize" value="{{$list->card_ammount}}" required>
                        </div>

                        <div class="form-group form-float">
                          <label for="account">Account Type</label>

                            <input name="account" type="text" class="form-control" placeholder="Account" value="{{$list->account}}">
                        </div>

                         <div class="form-group form-float">
                           <label for="address">Address</label>

                             <input name="address" type="text" class="form-control" placeholder="Address" value="{{$list->address}}">
                         </div>

                        <div class="form-group form-float">
                          <div class="card">
                             <div class="header">
                                 <h2>Feature Photo</h2>
                             </div>
                             <div class="body">
                                 <input type="file" class="dropify" name="photo"  >
                                 <img src="{{ asset('uploads/users') }}/{{ $list->photo }}" alt="">
                             </div>
                         </div>
                        </div>



                        <div class="form-group">
                            <div class="checkbox">
                                <input id="checkbox" type="checkbox" name="form_checked">
                                <label for="checkbox">I have read and accept the terms</label>
                            </div>
                        </div>
                        <button class="btn btn-raised btn-primary waves-effect" type="submit">Update</button>

                    </form>

                </div>
            </div>
        </div>
    </body>
</section>

@endsection
