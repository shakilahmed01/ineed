@extends('layouts.app')
@section('content')
<div class="container">
  <h1>Discount Store Information</h1>
<form action="{{route('add_discount')}}" method="post">
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

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="{{route('view_discount_store')}}"><button class="btn btn-primary">view</button></a>
</div>
@endsection
