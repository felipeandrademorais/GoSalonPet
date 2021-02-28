@extends('layouts.app')

@section('content')
<div id="servicos-container" >
    <div id="background"><h1 class="display-4  mx-auto">Nossos Serviços</h1></div> 
    
    <div id="tabs-container" >
        <!-- @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif -->
            
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-pequena-tab" data-toggle="tab" href="#nav-pequena" role="tab" aria-controls="nav-pequena" aria-selected="true">Raças Pequenas</a>
                <a class="nav-item nav-link" id="nav-media-tab" data-toggle="tab" href="#nav-media" role="tab" aria-controls="nav-media" aria-selected="false">Raças Médias</a>
                <a class="nav-item nav-link" id="nav-grande-tab" data-toggle="tab" href="#nav-grande" role="tab" aria-controls="nav-grande" aria-selected="false">Raças Grandes</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
                @foreach($racas as $raca)
                    @if($raca->tipo_raca == 1)
                        <div class="tab-pane fade show active" id="nav-pequena" role="tabpanel" aria-labelledby="nav-pequena-tab">
                            <ul class="list-group nav nav-tabs" >
                            @foreach($raca->servicos as $servico)
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
                    @endif
                    @if($raca->tipo_raca == 2)
                        <div class="tab-pane fade show active" id="nav-media" role="tabpanel" aria-labelledby="nav-media-tab">
                            <ul class="list-group nav nav-tabs" >
                            @foreach($raca->servicos as $servico)
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
                    @endif
                    @if($raca->tipo_raca == 3)
                        <div class="tab-pane fade show active" id="nav-grande" role="tabpanel" aria-labelledby="nav-grande-tab">
                            <ul class="list-group nav nav-tabs" >
                            @foreach($raca->servicos as $servico)
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
                    @endif
                @endforeach
            
        </div>
    </div>
</div>
@endsection
