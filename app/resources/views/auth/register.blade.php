@extends('layouts.app')

@section('content')
<div class="container-login">
    <h1>Registre-se</h1>
    <p>Já possui login? <a href="{{ url('/login') }}">Login</a></p>

    <form method="POST" action="{{ route('register') }}" class="form-login">
        @csrf
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nome" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Senha" name="password" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirme sua Senha" required autocomplete="new-password">
        
        <button type="submit" class="btlogin">
            {{ __('Register') }}
        </button>
    </form>
</div>
@endsection
