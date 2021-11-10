@extends('layouts.app')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Card Number</th>
      <th scope="col">Store Name</th>
      <th scope="col">Store Location</th>
      <th scope="col">Card Name</th>
      <th scope="col">Card Quantity</th>
      <th scope="col">Card Amount</th>
      <th scope="col">Account</th>
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
      <td>{{$list->card_name}}</td>
      <td>{{$list->card_quantity}}</td>
      <td>{{$list->card_ammount}}</td>
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
