<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrutasController extends Controller
{
    public function index(){

        return view('frutas.index')->with('frutas', array('manzan', 'pera', 'platano'));
    }

    public function naranjas(){
       $frutas=DB::table('frutas')->get();
       return view('frutas.naranjas')->with('frutas', $frutas);
    }

    public function peras(){
        return "Web de peras";
    }

    public function recibirFormulario(ValidationFormRequest $request){
       /* $messages =[
          'nombre.required'=>'ERROR OBLIGATORIO',
          'descripcion.required'=> 'DESCRIPCION OBLIGATORIO',
        ];

        $request->validate([
            'nombre'=>'min:15|required',
            'descripcion'=>'required',
        ], $messages);*/


       $request->validated();

       if($request->input('nombre')!='pera') {
            return redirect()->route('frutas')->withInput()->with('error', 'Se ha producido un error');
        }
        else
            return redirect()->route('peras');

    }
}
