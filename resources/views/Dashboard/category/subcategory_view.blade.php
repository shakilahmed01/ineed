@extends('layouts.app')
@section('content')
<h1>Subcategory Details</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Card Number</th>
      <th scope="col">category Id</th>

      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($lists as $list)
    <tr>
      <th scope="row">{{$list->id}}</th>
      <td>{{$list->subcategory_card_number}}</td>
      <td>{{$list->relationBetweenCategory->category_name}}</td>

      <td>
        <a href="{{ url('/subcategory/edit') }}/{{ $list->id }}" class=" btn-sm btn-primary">Edit</a>
          <a href="{{ url('/subcategory/delete') }}/{{ $list->id }}" class=" btn-sm btn-danger">Delete</a>
      </td>
    </tr>
@endforeach
  </tbody>
</table>
@endsection
