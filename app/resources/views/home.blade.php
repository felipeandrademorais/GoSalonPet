@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                    <ul class="list-group nav nav-tabs" >
                        @foreach($servicos as $servico)
                            <li class="nav-item">
                                <div id="flex-card" class="list-group-item">
                                    <img src="{{ $servico->url_img }}" alt="" />
                                    <div id="texto" >
                                        <h4>{{ $servico->nome }}</h4>
                                        <p>{{ $servico->descricao }}</p>
                                    </div>
                                    <div id="tempo-valor" >
                                        <p>{{ $servico->tempo }} {{ $servico->unidade_tempo }}<p>
                                        <p>R$ {{ $servico->preco }} </p>
                                    </div>
                                    <a href="{{ route('home') }}" >Agende Agora </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
