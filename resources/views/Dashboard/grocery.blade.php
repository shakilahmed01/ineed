@extends('layouts.app')
@section('content')
<div class="container">
  <h1>Grocery Store Information</h1>
<form action="{{route('add_grocery')}}" method="post">
  @csrf
  <div class="form-group col-md-4">
    <label for="exampleInputEmail1">Store Name</label>
    <input type="name" name="store_name" class="form-control" id="store_name"  placeholder="Store Name">

  </div>

  <div class="form-group col-md-4">
    <label for="exampleInputEmail1">Store Location</label>
    <input type="name" name="store_location" class="form-control" id="store_name"  placeholder="Location">

  </div>

  <div class="form-group col-md-4">
    <label for="card_name">Card Name</label>
    <input type="name" name="card_name" class="form-control" id="card_name"  placeholder="Card Name">

  </div>

  <div class="form-group col-md-4">
    <label for="card_quantity">Card Quantity</label>
    <input type="name" name="card_quantity" class="form-control" id="card_quantity"  placeholder="Quantity">

  </div>

  <div class="form-group col-md-4">
    <label for="card_ammount">Card Amount</label>
    <input type="name" name="card_ammount" class="form-control" id="card_ammount"  placeholder="Amount">

  </div>

  <div class="form-group col-md-4">
    <label for="account">Account</label>
    <input type="name" name="account" class="form-control" id="account"  placeholder="Account">

  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="{{route('view_grocery')}}"><button class="btn btn-primary">view</button></a>
</div>
@endsection
