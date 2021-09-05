@extends('layouts.login')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-10 col-xl-7 mx-auto">

            <h3 class="login-heading mb-4">Bienvenido de nuevo!</h3>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group mb-3">
                    <input id="email" type="email" placeholder="Dirección de correo electrónico" name="email" class="form-control rounded-pill border-0 shadow-sm px-4 @error('email') is-invalid @enderror" value="admin@gmail.com" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input id="password" type="password" name="password" placeholder="Contraseña" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary @error('password') is-invalid @enderror" value="123456789" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="custom-control custom-checkbox mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Recordar contraseña') }}
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Iniciar sesión</button>

                <div class="text-center">
                    @if (Route::has('password.request'))
                    <a class="btn btn-link small" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>

@endsection