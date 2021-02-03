@include('contactos.cabecera',['nom'=>$n])
<h2>Mi nombre es {{$n}} y mi edad es {{$e}}</h2>
@if($e<18)
    Eres menor de edad
    @else
    Eres mayor de edad
    @endif

<h1>Lista de frutas</h1>
@foreach($frutas as $fruta)
    {{$fruta}}<br>
    @endforeach
@include('contactos.cabecera')