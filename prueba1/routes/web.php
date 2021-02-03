<?php

use App\Http\Controllers\FrutasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('contacto/{nombre?}/{edad?}', function ($nom="Pepito", $edad=20) {
    //return view('contactos',['n'=>$nom, 'e'=>$edad]);
    //return view('contactos',array('n'=>$nom, 'e'=>$edad));
    return view('contactos.contacto')->with('n',$nom)
                               ->with('e',$edad)
                                ->with('frutas', array('manzana', 'peras', 'melones'));

   // return view('contactos.contacto',compact('nom','edad'));
})->where(['nombre'=>'[A-Za-z]+', 'edad'=>'[0-9]+'])
->name('contact')
->middleware('es_mayor_edad');

Route::get('layout', function(){
    return view('contactos.layout');
});



Route::prefix('fruteria')->group(function(){
    Route::get('frutas', [FrutasController::class, 'index'])->name('frutas');

    Route::get('naranjas', [FrutasController::class, 'naranjas']);

    Route::get('peras', [FrutasController::class, 'peras'])->name('peras');
    Route::post('frutas', [FrutasController::class, 'recibirFormulario'])->name('recibir');
});
