@extends('layouts.app')

@section('content')
<div id="container" class="container">
    <img class="w-100" src="img/dog.jpg" alt="dog">
    <div id="text">
        <h1 class="display-4">Meu Doguinho Salon</h1>
        <h4>Nós amamos e somos profissionais <br> em cuidados caninos em Tubarão/SC</h4>
        <p>
            <a href="{{ route('home') }}">Nossos Serviços</a>
    </div>
</div>
@endsection