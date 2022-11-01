<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wolmart</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <script src="{{asset('js/jquery-3.6.1.js')}}"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <img src="{{asset('imagenes/logo_walmart.png')}}" alt=""  width="75px"><br>
        <a class="navbar-brand" href="{{url('/')}}">Wolmart</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/usuario/registrar')}}">Registrarme <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/productos')}}">Productos</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link disabled">Mi carrito</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </div>
      </nav>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                @yield('contenido')
            </div>
        </div>
    </div>
    
    <footer class="text-center">
        <hr>
        Wolmart &copy; 2022 <br> Bejarano Félix Bernardo Daniel & Coronel Aispuro Sebastian
    </footer><br>
    <script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>