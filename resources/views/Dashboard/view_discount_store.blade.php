@extends('layouts.app')
@section('content')
<h1>Summury of discount store</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Card Number</th>
      <th scope="col">Store Name</th>
      <th scope="col">Store Location</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Price</th>
      <th scope="col">Discount</th>
      <th scope="col">Discount price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($lists as $list)
    <tr>
      <th scope="row">{{$list->id}}</th>
      <th scope="row">{{ Auth::user()->account }}</th>
      <td>{{$list->store_name}}</td>
      <td>{{$list->store_location}}</td>
      <td>{{$list->phone}}</td>
      <td>{{$list->price}}</td>
      <td>{{ Auth::user()->discount }}</td>
      <td>{{$list->account}}</td>
      <td>
        <a href="{{ url('/v1/dashboard/product/list') }}/{{ $list->id }}/{{ $list->slug }}" class=" btn-sm btn-primary">Edit</a>
          <a href="{{ url('/v1/dashboard/trash/vehicle') }}/{{ $list->id }}/{{ $list->slug }}" class=" btn-sm btn-danger">Delete</a>
      </td>
    </tr>
@endforeach
  </tbody>
</table>
@endsection
