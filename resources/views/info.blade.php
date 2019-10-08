@extends('layout')

@section('title', 'Basics Laravel Info')

@section('content')
    <h1> Informacion </h1>
    <ul>
        @isset($informacion)
            @foreach( $informacion as $item)
                <li> {{ $item }} </li> <br>
            @endforeach
        @else
            <li> No hay elementos </li>
        @endisset
    </ul>
@endsection
