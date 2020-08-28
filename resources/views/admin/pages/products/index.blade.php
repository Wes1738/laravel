@extends('admin.layouts.app')

@section('title', 'Gestão de Alunos')

@section('content')
    <h1>Exibindo os Produtos</h1>

    {{ $teste }}

   
    <hr>

    {{-- If e Else --}}
    @if ($teste === '123')
        É igual
    @elseif($teste == 123)
        É igual a 123
    @else
        É diferente
    @endif

    {{-- "Um if "Ao contrário" --}}
    @unless ($teste === '123')
        dsfdsfs
    @else
        dsfsdfsd
    @endunless

    {{-- Verifica se uma variável existe --}}
    @isset($teste2)
        <p>{{ $teste2 }}</p>
    @endisset

    {{-- Verifica se está vazio --}}
    @empty($teste3)
        <p>Vazio...</p>
    @endempty

    {{-- ´Para verificar se está autenticado --}}
    @auth
        <p>Autenticado</p>
    @else
        <p>Não autenticado</p>
    @endauth

    {{-- Inverso do Auth, verifica se não está autenticado --}}
    @guest
        <p>Não autenticado</p>
    @endguest

    {{-- O famoso switch case --}}
    @switch($teste)
        @case(1)
            Igual 1
            @break
        @case(2)
            Igual 2
            @break
        @case(3)
            Igual 3
            @break
        @case(123)
            Igual 123
            @break
        @default
            Default
    @endswitch

@endsection
