<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card fondoFormulario" >
                <div class="modal-header encabezadoFormulario mb-3" >
                    <h4 class="modal-title text-white" id="exampleModalLabel" style="text-align: center;" >{{ __('Restablecer Contraseña') }}</h5>
                </div>
                <div class="card-body contenidoFormulario" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                            <div class="form-group col-md-12 row" style="position:relative;">
                                <label>Correo</label>
                                <i class="fas fa-envelope iconos" ></i>
                                <input id="email" type="email"  class="inputTeceros form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-11 ">
                                    <button type="submit" class=" btn botonAgregar botones btn-width-ag">
                                        {{ __('Enviar enlace') }}
                                    </button>
                            
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
