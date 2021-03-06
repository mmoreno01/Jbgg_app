@extends('layout')

@section('content')

{{-- seccion de card de identificacion de administrador --}}
<section id="content-dashboard">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
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
            @include('common.success')
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
                            <label for="descripcion">Descripcion</label>
                            <textarea id="textarea" type="text" name="descripcion" class="form-control"  rows="10" cols="50">{!! $vacantes->descripcion !!}</textarea>  
                        </div>
                        
                         <div class="form-group content-btn">
                                    <button class="btn btn-success  ">Actualizar</button>
                                    <button class="btn btn-warning" {{ URL::previous() }}>Cancelar</button>
                        </div>
                </div>
            </form>
        </div>
</section> 
{{--fin seccion de formulario de edicion de la vacante --}}

@endsection 
