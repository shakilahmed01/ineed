<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Home Page</title>
</head>
        <!-- favicon size 64x64 not good -->
    <link rel="icon" type="image/png" href="{{asset('Dashboard/assets_kayes/media/iNeedfavicon.ico')}}" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link href="{{asset('Dashboard/assets_kayes/css/bootstrap.min.css')}}" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<body>

 <style>
     tr[data-href] {
         cursor: pointer;
     }
 </style>
 <!-- header style -->
 <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
    .nav-text{
    color: black;
    font-weight: 600;
  }

  </style>
<!-- header section -->
<header class="p-3   " style="background-color: #ffffff;">
    <div class="container">
      <div class=" d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="#" class="col-3 d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="{{asset('Dashboard/assets_kayes/logo_v2_withoutSlogan.png')}}" id="logo" alt="" style="width: 80%;">
        </a>
        <a href="#" class="nav-link px-2 nav-text"> User Name: Osman Sikdar</a>
        <!-- <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 nav-text"> User Name: Osman Sikdar</a></li>
        </ul> -->


        <div class="text-end" style=" padding-left: 44%;">
          <div class="dropdown text-end">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
              <li><a class="dropdown-item" href="#">New project...</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
<!-- header section end -->
<div class="container mb-3 mt-3">
    <table class="table table-striped table-bordered table-hover mydatatable" style="width: 100%;" id="">
        <thead>
            <tr>
                <th>Memberhip Card</th>
                <th>Percentage (%)</th>
                <th>Card Amount</th>
            </tr>
        </thead>

        <tbody>
            <a href="#">
                <tr data-href="https://www.google.com/">
                   <a href="#">
                    <td>asd</td>
                    <td>5%</td>
                    <td> 10000</td>
                   </a>
                </tr>
            </a>
            <tr>
              <td>Bronze</td>
              <td>5%</td>
              <td> 20000</td>
            </tr>
            <tr>
                <td>Silver</td>
                <td>25%</td>
                <td> 40000</td>
            </tr>
            <tr>
                <td>Gold</td>
                <td>50%</td>
                <td> 80000</td>
            </tr>






        </tbody>

    </table>
</div>
      <!-- Footer-->
      <style>
          footer a {
                color: rgba(255, 255, 255, 0.5);
                text-decoration: none;
            }
            footer a:hover, footer a:active, footer a:focus {
                color: rgba(255, 255, 255, 0.75);
                text-decoration: underline;
            }
      </style>
      <footer class="bg-black text-center py-5" style="background-color: #000 !important; margin: 11% 0% 0% 0%;" >
        <div class="container px-5">
            <div class="text-white-50 small" style="--bs-text-opacity: 1;
                                                      color: rgba(255, 255, 255, 0.5) !important;
                                                      font-size: 0.875em;">
                <div class="mb-2">&copy; Your Website 2021. All Rights Reserved.</div>
                <a href="#!">Privacy</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">Terms</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">FAQ</a>
            </div>
        </div>
    </footer>









                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * Dependency Section  * *-->
                        <!-- * * * * * * * * * * * * * * *-->


<!-- jQuery Dependencies -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<!-- Popper JS Dependencies -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<!-- Data Tables Dependencies -->
<!-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> -->

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css"/>

<!-- <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script> -->

<!--BOOTSTRAP CSS-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Custom script -->
  <script>
      $('.mydatatable').DataTable();
  </script>

<!-- header script -->

<script src="../bootstrap-5.1.3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom script To make row clickable -->
<script>
     // if new row is created
     function addRow(){
                    document.querySelector("tbody").insertAdjacentHTML("beforeend",`
                    <tr data-href="https://www.google.com/">
                            <td>new</td>
                            <td>5%</td>
                            <td> 10000</td>
                    </tr>
                    `)
                }
                $(document).ready(function () {
                    $(document.body).on("click", "tr[data-href]", function() {
                        window.location.href = this.dataset.href;
                    });
                });
</script>
</body>
</html>
