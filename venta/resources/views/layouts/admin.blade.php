<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Curso Laravel</title>

  <!-- Bootstrap core CSS -->

  <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}"> 
  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="{{asset('css/simple-sidebar.css')}}">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading text-center" >Curso Laravel</div>
      <div class="list-group list-group-flush text-center">
        <a href="#" class="list-group-item list-group-item-action bg-light">Artículos</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Ventas</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Clientes</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Usuarios</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-dark" id="menu-toggle"></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Mi usuario
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Salir</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>


      <div class="container-fluid">
         <!--Inicio Contenido-->
   
        @yield('contenido')
    
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
  @stack('scripts')
  <!-- Bootstrap core JavaScript 
  <script src="vendor/jquery/jquery.min.js"></script>-->

  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>"
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>

  