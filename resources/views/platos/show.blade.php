@extends('layaouts.plantilla')

@section('title', 'Platos ' . $name)

@section('content')
    <h1>Detalle del plato {{ $name }}</h1>
@endsection
