@extends('master')

@section('contenido')

    <h1>Listado de productos existentes:</h1><hr>

    <div class="row">
        @foreach ($productos as $a)

            <div class="card" style="width: 18rem;">
                <img src="{{$a->imagen}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$a->nombre}}</h5>
                  <p class="card-text">{{$a->descripcion_p}}</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Caracteristicas: <br>{{$a->caracteristicas_p }} </li>
                  <li class="list-group-item">Precio: {{$a->precio }}</li>
                  <li class="list-group-item">Categoria: {{$a->categoria}}</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="btn btn-primary">Agregar al carrito</a>
                </div>
              </div>
        @endforeach
    </div>

    <div class="text-center">
        {{$productos->links()}}
    </div>
@stop