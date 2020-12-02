<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pengisian Form</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('user.index') }}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Event Organizer</div>
      </a>

      <!-- Divider -->

      <!-- Nav Item - Dashboard -->
      <div class="sidebar-heading">
        HOME
      </div>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('user.index') }}">
          <i class="fas fa-fw fa-pencil-alt"></i>
          <span>Pengisian Form</span></a>
      </li>

      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            

            <!-- Nav Item - Alerts -->

            <!-- Nav Item - Messages -->

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">User</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Pengisian Form</h1>
          <div class="row">
            <div class="col">
              <div class="card" >
                <div class="card-body">
                    <h5 class="card-title">Form Event</h5>
                    <form id="form_data">
                      @csrf
                      <div class="form-group">
                        <label for="full_name">Full Name <span style="color: red; display:block; float:right">*</span></label>
                        <input type="text" class="form-control" name="full_name" id="full_name" id="full_name" aria-describedby="full_name" placeholder="Full Name">
                      </div>
                      <div class="form-group">
                        <label for="email">Email <span style="color: red; display:block; float:right">*</span></label>
                        <input type="email" class="form-control" name="email" id="email" id="email" aria-describedby="emailHelp" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="event">Event <span style="color: red; display:block; float:right">*</span></label>
                        <select class="form-control" name="event" id="event">
                          <option disabled="" value="" selected="">Choose Event</option>
                          @foreach($data as $item)
                            <option value="{{ $item->id }}">{{ $item->event_name }}</option>
                          @endforeach
                          
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="age">Age <span style="color: red; display:block; float:right">*</span></label>
                        <input type="number" class="form-control" name="age" id="age" id="age" aria-describedby="age" placeholder="Age">
                      </div>
                      <div class="form-group">
                        <label for="phone_number">Phone Number <span style="color: red; display:block; float:right">*</span></label>
                        <input type="number" class="form-control" name="phone_number" id="phone_number" id="phone_number" aria-describedby="phone_number" placeholder="Phone Number">
                      </div>
                      <div class="form-group">
                        <label for="proffesion">Proffesion</label>
                        <input type="text" class="form-control" name="proffesion" id="proffesion" id="proffesion" aria-describedby="proffesion" placeholder="Proffesion">
                      </div>
                      <button type="submit" class="btn btn-primary" id="submit_button">Send</button>
                    </form>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" >
                <div class="card-body">
                    <h5 class="card-title">List Event</h5>
                    @foreach($data as $item)
                        <h6 class="card-subtitle mb-2 text-muted"><b>{{ $item->event_name }}</b></h6>
                        <p class="card-text">{{ $item->event_location }}. <br> <span class="text-danger">{{ $item->event_date }}.</span></p>
                        <hr>
                    @endforeach
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Event Organizer 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>
  <script type="text/javascript">
        let data;
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

          $(document).on('click','#submit_button',function(event){
            event.preventDefault();
            $('#submit_button').html('Sending...');
            $.ajax({
                url: "{{ route('participant.add') }}",
                method: 'POST',
                data: $('#form_data').serialize(),
                dataType: 'JSON',
                success: function(data){

                    if(data.success){
                        data = "Anda berhasil terdaftar.";
                        swal({
                                icon: 'success',
                                title: "Berhasil",
                                text: data,
                        });
                        $('#submit_button').html('Send');
                    }
                    else if(data.fail){
                        data = data.errors;
                        swal({
                                icon: 'error',
                                title: "Kesalahan",
                                text: data,
                        });
                        $('#submit_button').html('Send');
                    };
                }
            })
           });
        });
  </script>
</body>

</html>
