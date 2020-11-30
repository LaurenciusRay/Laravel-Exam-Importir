<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="icon" href="{{asset('assets/img/logourl2.png')}}" type="image/ico" />
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('assets/dist/css/skins/_all-skins.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('assets/plugins/iCheck/flat/blue.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('assets/plugins/datepicker/datepicker3.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    {{-- css admin --}}
    <link rel="stylesheet" href="{{asset('assets/css/adminstyle.css')}}">
    {{-- data table --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      @include('KreasiEvent.layouts.Admin.header')

      @include('KreasiEvent.layouts.Admin.sidebar')

        <div class="content-wrapper">
          @yield('KreasiEvent.content.Admin') 
        </div>

      @include('KreasiEvent.layouts.Admin.footer') 

    </div>

    <!-- jQuery 2.2.3 -->
    <script src="{{asset('assets/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.6 -->
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="{{asset('assets/plugins/morris/morris.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- jvectormap -->
    <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('assets/plugins/knob/jquery.knob.js')}}"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- datepicker -->
    <script src="{{asset('assets/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <!-- Slimscroll -->
    <script src="{{asset('assets/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('assets/plugins/fastclick/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('assets/dist/js/app.min.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('assets/dist/js/pages/dashboard.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('assets/dist/js/demo.js')}}"></script>
    {{-- Data Table --}}
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <script>
      $(document).ready( function () {
        $('#table_id').DataTable();
        } );
    </script>
  </body>
</html>
