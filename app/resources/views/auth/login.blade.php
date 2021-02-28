@extends('layouts.app')

@section('content')
<div class="container-login">
    <h1>Faça o seu Login</h1>
    <p>Não possui login? <a href="{{ url('/register') }}">Registre-se</a></p>

    <form method="POST" action="{{ route('login') }}" class="form-login">
        @csrf

        <input id="email" type="email" placeholder="E-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input id="password" type="password" placeholder="Senha" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    
        <button type="submit" class="btlogin">
            Logar
        </button>
    </form>
</div>
@endsection
