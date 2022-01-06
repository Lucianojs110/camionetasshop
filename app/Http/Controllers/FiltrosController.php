<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filtros;
use Session;

class FiltrosController extends Controller
{
    
    public function index()
    {
        $filtros = Filtros::get();

        return view('filtros.index', ['filtros' => $filtros]);
        
    }

    
    public function create()
    {
        $filtros = Filtros::get();

        return view('filtros.new', ['filtros' => $filtros]);
        
    }

    
    public function store(Request $request)
    {
        $filtros = new Filtros();
        $filtros->fill([

            'id_filtro'=> $request->input('id_filtro'),
            'descripcion' => $request->input('descripcion'),

        ]);
        $filtros->save();
        $notificacion = array(
            'message' => 'El Filtro se cargo Correctamente', 
            'alert-type' => 'succes'
        );
        Session::flash('success', 'Filtro Agregado con exito');
        return redirect("admin/filtros")->with($notificacion);

        
    }

    
    public function show($id)
    {
        $filtros = Filtros::findOrFail($id);

        return view("filtros.show",['filtros'=>$filtros]);
        
    }

    
    public function edit($id)
    {

        $filtros = Filtros::findOrFail($id);

        return view("filtros.edit",['filtros'=>$filtros]);
    
    }

    
    public function update(Request $request, $id)
    {
        $filtros = Filtros::FindOrFail($id);
        $filtros-> fill([ 
            'descripcion' => $request->input('descripcion'),

            ]);
        $filtros->save();
        $notificacion = array(
            'message' => 'El Filtro fue modificada Correctamente', 
            'alert-type' => 'succes'
        );
        Session::flash('success', 'Filtro editado con exito');
        return redirect("admin/filtros")->with($notificacion);
    }

    
    public function destroy($id)
    {
        $filtros = Filtros::FindOrFail($id);
        $filtros->delete();
        $notificacion = array(
            'message' => 'El Filtro se eliminó Correctamente', 
            'alert-type' => 'succes'
        );

        return redirect("admin/filtros")->with($notificacion);
        
    }
}
