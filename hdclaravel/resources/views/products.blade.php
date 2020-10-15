@extends('layouts.main')

@section('title', 'HDC Events | Produtos')

@section('content')
    <h1>Tela de Produtos</h1>
    <h3>Confira as nossas ofertas</h3>
    
    @if ($busca != '')
        <p>O usuário está buscando por: {{ $busca }}</p>
    @endif
    
@endsection