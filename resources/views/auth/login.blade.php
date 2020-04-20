<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="public\css\estilos.css">


@extends('layouts.app')
@section('content')

<div class="container">

<div style="float:left; padding: 15px 30px">
    <img src="/images/Logo.png">
</div>
        <div>
            <br>
            <div style="float:right; padding: 8px 50px">
            <div class="card" style="width:450px">
            <br>
                <b><div class="form-group row" style="justify-content:center">{{ __('Iniciar sesión') }}</div><b>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row" style="justify-content:center">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label> -->

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
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label> -->


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
                                <!--  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                  <label class="form-check-label" for="remember">
                                        {{ __('Recordar') }}
                                    </label>
                                </div>  -->

                            <br>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste tu contraseña') }}
                                    </a>
                                @endif

                            </div>
                        </div>

                        <br>
                        <div class="form-group row mb-0" style="justify-content:center">

                            <div>
                                <b><button class="btn" type="submit" style="background-color: #787473; Font-Family: verdana; color:white"><b>
                                    {{ __('Registrarse') }}
                                </button>

                                <b><button type="submit" class="btn" style="background-color: #F55804; Font-Family: verdana;  color:white" ><b>
                                    {{ __('Ingresar') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
