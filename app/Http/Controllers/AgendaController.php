<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Requests;

use App\Agenda;

class AgendaController extends Controller
{
    public function  guardar($nombre, $telefono){

    	$contacto = new Agenda;
    	$contacto->create(['nombre'=>$nombre, 'telefono'=>$telefono]);

    	return $contacto;

    }


    public function mostrarTodo(){
    	$contactos = Agenda::all();

    	return $contactos;
    }

    public function create(){
    	return view('formulario_contacto');
    }

    public function store(Request $request){
    	$cont = new Agenda;
    	
    	if($cont->create($request->all())){

    		session()->flash('exitoso', 'Contacto Guardado Correctamente');

    	}else{

    		session()->flash('error', 'Error al guardar el contacto');

    	}
    	return back();
    }
}
