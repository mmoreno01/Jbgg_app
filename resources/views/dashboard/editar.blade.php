@extends('layout')

@section('content')

{{-- seccion de card de identificacion de administrador --}}
<section id="content-dashboard">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h1>Bienvenido {{ auth()->user()->name }}</h1>
                        <h2 class="card-title">Email: {{ auth()->user()->email }}</h2>
                        <form  method="POST" action="{{ route('logout') }}">
                                {{csrf_field()}}
                                <button class="btn btn-danger">Cerrar sesion</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- seccion de formulario de edicion de la vacante --}}
<section id="editar_vacante">
    <div class="container">
        @if(session('info'))
            <div class="alert alert-success" role="alert">
                {{session('info')}}
            </div>
        @endif   
        <form method="POST" action="/dashboard/{{$vacantes->id}}/editar">
        @method('PUT')
       {{csrf_field()}}
            <div class="row d-flex justify-content-center">
                <div class="col-md-6"> 
                        <div class="card-header text-center">
                             <i class="fas fa-user-edit d-inline"></i>
                            <h3 class=" d-inline">Editar la vacante</h3>
                        </div>
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input type="text" class="form-control" name="titulo" value="{{ $vacantes->titulo }}">
                        </div>
                        <div class="form-group">
                            <label for="edad">Edad</label>
                            <input type="text" class="form-control" name="edad" value="{{ $vacantes->edad }}">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Estudios</label>
                            <input type="text" class="form-control" name="descripcion" value="{{ $vacantes->descripcion}}"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="experiencia">Experiencia Laboral</label>
                            <input type="text" class="form-control" name="experiencia" value="{{ $vacantes->experiencia }}"></textarea>
                        </div>
                         <div class="form-group">
                                    <button class="btn btn-success  w-100">Actualizar</button>
                        </div>
                </div>
                {{-- <div class="col-md-6">
                        @if(session('info'))
                            <div class="alert alert-success" role="alert">
                                {{session('info')}}
                            </div>
                        @endif   
                        <div class="card">
                            <div class="card-header">
                                <div class="form-group">
                                    <button class="btn btn-success  w-50">Actualizar</button>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-warning white  w-50" disabled>Editar</button>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-danger   w-50" disabled>Eliminar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </form>
        </div>
</section> 
{{--fin seccion de formulario de edicion de la vacante --}}

@endsection 
