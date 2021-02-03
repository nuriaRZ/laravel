@extends('layout.master')
@section('content')

<h1>Vista detalle pelicula {{$id}}</h1>

<div class="row">
    <div class="col-sm-4">
        <img src="{{$arrayPeliculas[$id]['poster']}}" style="height:400px">

    </div>
    <div class="col-sm-8">
        <h1>{{$arrayPeliculas[$id]['title']}}</h1>
        <h5>Año: {{$arrayPeliculas[$id]['year']}}</h5>
        <h5>Director: {{$arrayPeliculas[$id]['director']}}</h5>
        <p><b>Resumen: </b>{{$arrayPeliculas[$id]['synopsis']}}</p>


        @if($arrayPeliculas[$id]['rented'] == 'true')
            <p><b>Estado: </b>Pelicula actualmente alquilada</p>
            @else
            <p><b>Estado: </b>Pelicula disponible</p>

        @endif

        <div class="row">
            <div class="col-2 m-3" >
                @if($arrayPeliculas[$id]['rented'] == 'true')
                    <button class="btn btn-danger text-light" name="devolver">Devolver pelicula</button>

                @else
                    <button class="btn btn-info text-light" name="alquilar">Alquilar pelicula</button>
                @endif
            </div>
            <div class="col-2 m-3">
                <a href="../edit/{{$id}}" class="btn btn-warning text-light" name="editar">Editar pelicula</a>
            </div>
            <div class="col-2 m-3">
                <a href="../" class="btn btn-light border-warning" name="volver">Volver al listado</a>
            </div>



        </div>





    </div>
</div>

@endsection