@extends('layout.master')
@section('content')

<h1>Vista detalle pelicula {{$id}}</h1>

<div class="row">
    <div class="col-sm-3">
        <img src="{{$arrayPeliculas[$id]['poster']}}" style="height:200px">

    </div>
    <p class="col-sm-9">
        <h1>{{$arrayPeliculas[$id]['title']}}</h1>
        <h5>Año: {{$arrayPeliculas[$id]['year']}}</h5>
        <h5>Director {{$arrayPeliculas[$id]['director']}}</h5>
        <p><b>Resumen </b>{{$arrayPeliculas[$id]['synopsis']}}</p>


        @if($arrayPeliculas[$id]['rented'] == 'true')
            <b>Estado </b>Pelicula actualmente alquilada
            @else
           <b>Estado</b> Pelicula actualmente disponible
        @endif



    </div>
</div>

@endsection