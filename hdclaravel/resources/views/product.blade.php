@extends('layouts.main')

@section('title', 'Página de Produto')

@section('content')
  @if ($id != null)
    <p>Exibindo o Produto id: {{ $id }}</p>
  @endif
@endsection