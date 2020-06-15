@extends('layouts.app')
@section('content')

<div class="container">

    <div style="float:left; padding: 5px 0px;">
        <!--<img src="/images/Logo.png"> -->
        <img src="/images/Logop1.png">
    </div>
    <div>
        <br>
        <div style="float:right; padding: 8px 0px">
            <div class="card fondoFormulario" style="width:450px">
            <br>
            <b>
                <div class="form-group row" style="justify-content:center">{{ __('Iniciar sesión') }}</div>
                <b>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row" style="justify-content:center">
                            <div style="position:relative">
                                <i class="fas fa-envelope" style="color:#aaa; padding: 10px 8px; position:absolute; left:0%; top:8%"></i>
                                <input style="width:300px; padding: 15px 30px"  id="email" type="email" placeholder="Correo" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="justify-content:center">
                            <div style="position:relative">
                                <i class="fas fa-lock" style="color:#aaa; padding: 9px 9px; position:absolute; left:0%; top:8%"></i>
                                <input style="width:300px; padding: 15px 30px" placeholder="Contraseña" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="justify-content:center">
                            <div>
                                <br>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Olvidaste tu contraseña') }}
                                        </a>
                                    @endif

                            </div>
                        </div>

                            <br>
                        
                        <div>
                            <b><button type="submit" class="btn botonAgregar botones btn-width-ag"  ><b>
                                {{ __('Ingresar') }}
                            </button>
                        </div>
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection