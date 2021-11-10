@extends('layouts.app')
@section('content')
<h1>User Details</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Card Name</th>
      <th scope="col">Card Quantity</th>
      <th scope="col">Card Amount</th>
      <th scope="col">Account</th>
      <th scope="col">Discount</th>
      <th scope="col">address</th>
    </tr>
  </thead>
  <tbody>
    @foreach($lists as $list)
    <tr>
      <th scope="row">{{$list->id}}</th>
      <td>{{$list->name}}</td>
      <td>{{$list->email}}</td>
      <td>{{$list->phone}}</td>
      <td>{{$list->card_name}}</td>
      <td>{{$list->card_quantity }}</td>
      <td>{{$list->card_ammount}}</td>
      <td>{{$list->account}}</td>
      <td>{{$list->discount}}</td>
      <td>{{$list->address}}</td>
      <td>
        <a href="{{ url('/v1/dashboard/product/list') }}/{{ $list->id }}/{{ $list->slug }}" class=" btn-sm btn-primary">Edit</a>
          <a href="{{ url('/v1/dashboard/trash/vehicle') }}/{{ $list->id }}/{{ $list->slug }}" class=" btn-sm btn-danger">Delete</a>
      </td>
    </tr>
@endforeach
  </tbody>
</table>
@endsection
