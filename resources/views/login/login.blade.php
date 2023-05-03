
@extends('layout.login_css_js')




@section('contenido')

<div class="login-box">
    <div class="login-logo">
        <a href="login.php"><b>ADEOM </b>- COLONIA</a>  
        
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Accede al panel de administracion</p>

      <form action="" method="post">
      @csrf
        <div class="form-group has-feedback">
          <input type="text" name="usuario" class="form-control" placeholder="usuario" required>

          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">

          <input type="password" name="password" class="form-control" placeholder="Password" required>

          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">

          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block ">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


    </div>
    <!-- /.login-box-body -->
  </div>
  
  @endsection