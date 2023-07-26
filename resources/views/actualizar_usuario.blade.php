@extends('adminlte::page')

@section('title', 'Perfil')

@section('content')
<div class="container">
    <div class="row justify-content-center">

    <div class="col-md-6">
        <br>
            <div class="card">
                <div class="card-header text-white bg-dark mb-3">{{ __('Edición de perfil') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
    <form action="actualizar_usuario" method="post">
    @csrf

    @foreach($data as $d)
    <strong>Id usuario</strong>
    <div class="input-group mb-3">
           <input type="text" name="id" class="form-control"
                   placeholder="Id" value="{{ $d->id }}" required disabled>
    </div>

    <strong>Nombre</strong>
    <div class="input-group mb-3">
            <input type="text" name="nombre" class="form-control"
                   placeholder="Nombre" value="{{ $d->name }}" required autofocus>
    </div>

    <strong>Correo electrónico</strong>
    <div class="input-group mb-3">
            <input type="mail" name="correo" class="form-control"
                   placeholder="Correo" value="{{ $d->email }}" required>
    </div>

    <button type=submit class="btn btn-block btn-primary">
                <span class="fas fa-recycle"></span>
                {{ 'Actualizar' }}
                </button>
    @endforeach
    </form>
                    
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
