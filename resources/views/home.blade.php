@extends('layout')

@section('title')
    Home
@endsection

@section('content')
    <h1>Home</h1>
    <p> Bienvenido {{ $nombre ?? 'usuario' }} </p>
@endsection
