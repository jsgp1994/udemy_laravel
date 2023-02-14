@extends('layouts.master')

@section('content')

    @include('Fragment.subview')


    <h1> {{ 'Usuario => '.$user->name}} </h1>

    @if($edad > 18)
        <h1>Adulto</h1>
    @else
        <h1>Joven</h1>
    @endif

    <h2>Listado de nombres:</h2>

    <ol>
    @foreach($nombres as $data)
        <li> {{ $data }} </li>
    @endforeach
    </ol>


    @forelse ($array as $data)
        <li> {{ $data }} </li>
    @empty
        <p>No se tienen datos</p>
    @endforelse

@endsection
