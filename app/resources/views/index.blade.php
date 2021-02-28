@extends('layouts.app')

@section('content')
<div id="container" >
    <div id="background" > 
        <div id="container-text">
            <h1 class="display-4 ">Meu Doguinho Salon</h1>
            <h4>Nós amamos e somos profissionais <br> em cuidados caninos em Tubarão/SC</h4>
            <div id="button-text">
                <a href="{{ route('home') }}">Nossos Serviços</a>
            </div>
        </div>
    </div>
</div>
@endsection