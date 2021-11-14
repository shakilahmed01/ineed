@extends('layouts.app')
<!-- Main Content -->

@section('content')
<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script> -->
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Main Content -->
<section class="content">
    <div class="body_scroll">



<!-- BEGIN::HERE WE PUT OUR CONTENT -->

<!-- START -->
<!-- @yield('content') -->

<!-- Basic Validation -->
           <div class="row clearfix">
               <div class="col-lg-8 col-md-6 col-sm-12" style="margin:0 auto;">

                {{-- Add Category --}}
                <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                    Add Category
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Add Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                        <form id="category_form" method="POST" action="{{ route('cat_create') }}">
                            @csrf
                                <div class="form-group form-float">
                                <input type="text" class="form-control" placeholder="Category Name" name="category_name" required>
                            </div>
                            <div class="form-group form-float">
                            <input type="text" class="form-control" placeholder="Category Discount" name="category_discount" required>
                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" id="btn-submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        </div>



                        </div>
                    </div>
                    </div>
                {{-- Add categoty --}}


{{-- Add Subcategory --}}


                <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  Add Subcategory
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Subcategory</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


      <form id="subcategory_form" method="POST" action="{{ route('sub_cat_create') }}">
                            @csrf
                                <div class="form-group form-float">
                                 <input type="text" class="form-control" placeholder="Subcategory Card Name" name="subcategory_card_number" required>
                                </div>

                                <div class="form-group form-float">

                                        <select class="form-control show-tick ms select2"
                                            data-placeholder="Card Category" name="category_id">
                                            <option></option>
                                            @foreach ($categories as $category)
                                                <option type="text" value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach

                                        </select>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" id="subcategory_btn" class="btn btn-primary">Submit</button>
                                </div>
        </form>



      </div>

    </div>
  </div>
</div>

{{-- Add Subcategory --}}




                   <div class="card">
                       <div class="header">
                           <h2><strong>Add</strong>User</h2>
                           <ul class="header-dropdown">
                               <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                   <ul class="dropdown-menu dropdown-menu-right">
                                       <li><a href="javascript:void(0);">Action</a></li>
                                       <li><a href="javascript:void(0);">Another action</a></li>
                                       <li><a href="javascript:void(0);">Something else</a></li>
                                   </ul>
                               </li>
                               <li class="remove">
                                   <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                               </li>
                           </ul>
                       </div>
                       <div class="body">

                       <form  method="POST" action="{{route('post_user_information')}}" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group form-float">
                                   <input type="text" class="form-control" placeholder="User Name" name="name" required>
                               </div>
                               <div class="form-group form-float">
                                   <input type="text" class="form-control" placeholder="Email" name="email" required>
                               </div>
                               <div class="form-group form-float">
                                   <input type="text" class="form-control" placeholder="User Phone" name="phone" required>
                               </div>


                               <div class="form-group form-float" >
                                         <select class="form-control show-tick ms select2"
                                             data-placeholder="Product Category" id="main_category_id"  name="card_name">
                                            <option></option>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach

                                        </select>
                                </div>

                                <div class="form-group form-float">

                                    <select class="form-control show-tick ms select2"
                                        data-placeholder="Product Subcategory" id="subcategory_id" name="card_number">
                                        <option></option>
                                        @foreach ($sub_categories as $subcategory)
                                <option value="{{ $subcategory->id }}">{{ $subcategory->subcategory_card_number }}</option>
                                           @endforeach
                                    </select>
                                </div>


                               <div class="form-group form-float">
                                   <input name="card_ammount"  placeholder="Amount" class="form-control no-resize" required>
                               </div>

                               <div class="form-group form-float">

                                   <input name="account" type="text" class="form-control" placeholder="Account">
                               </div>

                                <div class="form-group form-float">

                                    <input name="address" type="text" class="form-control" placeholder="Address">
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
<!-- SAMPLE AJAX -->
                           <input type="text" id="x">
                           <script>
                              $(document).ready(function(){
                                $("#x").change(function(){
                                  alert("The text has been changed.");
                                });
                              });
                              </script>
   <!-- SAMPLE AJAX -->
                       </div>
                   </div>
               </div>
           </div>

<!-- END -->

<!-- END::HERE WE PUT OUR CONTENT -->


    </div>
</section>



<script>
    $(document).ready(function(){
        $('#btn-submit').on('click',function(){
            $('#category_form').submit();
        });

        $('#subcategory_btn').on('click',function(){
            $('#subcategory_form').submit();
        });
    });
</script>


<script>
    $(document).ready(function(){
        $('#main_category_id').change(function () {

            var main_category_id = this.value;
            alert(main_category_id);

            $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
            type:'POST',
            url:'/get/subcategory',
            data: {
              main_category_id: main_category_id
            },
            success: function (data) {
                    $( "#subcategory_id" ).html(data);
                    // console.log(data);
                     //alert(data);
                }
            });

        });
    });
</script>
@endsection
