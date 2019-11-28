@extends('layouts.app')

@section('content')

<h1> Lista de Eventos </h1>
<hr>

@foreach($esportes as $esportes)
    <p><a href="/esportes/{{$esportes->id}}">{{$esportes->nome}}</a></p>
    <p>{{$esportes->descricao}}</p>
    <p>{{\Carbon\Carbon::parse($esportes->data)->format('d/m/Y h:m')}}</p>
    <p>{{$esportes->genero}}</p>
    <h2>{{$esportes->resultado}}<h2><br><br>


@endforeach
<p class="h3"><a href="/eventos">Ver eventos</a></p>
<p class="h3"><a href="/atletas">Ver atletas</a></p>

@auth
<p class="h3"><a href="/esportes/create">Criar esporte</a></p>
@endauth
@endsection