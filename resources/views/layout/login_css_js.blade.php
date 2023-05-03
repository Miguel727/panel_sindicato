<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | AC</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/plugins/fontawesome-free/css/all.min.css') }} ">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }} ">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }} ">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/dist/css/adminlte.min.css') }} ">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link href="{{ asset('/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('/plugins/summernote/summernote-bs4.min.css') }} ">
    <style>
        /* body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        } */
.container{
   margin-left: 100%;
   margin-right: 100%;
   margin-top:10% ;

}
        @media screen and (max-width: 576px) {
  .container {
    margin-left: 0;
   margin-right: 0;
  }
}
    </style>
</head>


<body class="hold-transition sidebar-mini layout-fixed">

    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ asset('/dist/img/bandera.png') }}" alt="AdminLTELogo" height="160" width="180">
    </div>

    <div>
        <div class="content-header"> </div>

        <!-- Contenedor para centrar el contenido -->
        <div class="center">
           
                
        <div style="display: flex; justify-content: center;">
  <div class="container">
    @yield('contenido')
  </div>
</div>
           
        </div>

        <!-- /.container-fluid -->
        <!-- /.content -->
<div>
      </div>
    </div>
    <!-- Control Sidebar -->
    <!-- ./wrapper -->
    <script>
        // Obtener el elemento del footer
        var footer = document.querySelector('#currentYear');
        // Obtener el año actual
        var year = new Date().getFullYear();
        // Actualizar el texto del footer con el año actual
        footer.textContent = year;
    </script>
    <!-- jQuery -->
    <script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('/plugins/sparklines/sparkline.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScropuntoventa/public/llbars -->
    <script src="{{ asset('/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('/dist/js/pages/dashboard.js') }}"></script>



</body>

</html>