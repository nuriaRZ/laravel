<a href="{{action([\App\Http\Controllers\FrutasController::class, 'naranjas'])}}">IR a naranjas</a>
<a href="{{action([\App\Http\Controllers\FrutasController::class, 'peras'])}}">Ir a peras</a>
<h1>Lista de Frutas</h1>
<ul>
    @foreach($frutas as $fruta)
        <li>{{$fruta}}</li>
        @endforeach
</ul>

@if(session('error'))
    {{session('error')}}
@endif

<form action="" method="post">
    @csrf
    <p>
        Nombre de la fruta: <input type="text" name="nombre" {{old('nombre')}}>
    </p>


    <p>
        Descripción: <textarea name="descripcion"></textarea>
    </p>
    <input type="submit" name="enviar" value="enviar">
</form>
<ul>
@foreach($errors->all() as $error)

    <li>{{$error}}</li>
@endforeach
</ul>

============

<ul>
    @foreach($errors->get('nombre') as $error)

        <li>{{$error}}</li>
    @endforeach
</ul>

============
@if($errors->has('nombre'))
    {{$errors->first('nombre')}}
@endif