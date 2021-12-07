<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;
use RealRashid\SweetAlert\Facades\Alert;


use Redirect;
use Session;

class CategoriasController extends Controller
{
    
    public function index()
    {
        $categorias  = Categorias::get();
        

        return view('categorias.index', ['categorias' => $categorias]);
    }

   
    public function create()
    {
        $categorias = Categorias::get();
        

        return view("categorias.new",['categorias'=>$categorias]);
    }

   
    public function store(Request $request)
    {
        $cat = new Categorias(); // crea instancia de del objeto categoria y Registro nuevo en la bd(fila nueva)
        $cat-> fill([ 
            'id_categoria'=> $request->input('id_categoria'),
            'nombre' => $request->input('nombre'),

            ]);
        $cat->save();
        $notificacion = array(
            'message' => 'La Categoria se cargo Correctamente', 
            'alert-type' => 'succes'
        );
       
        return redirect("/categorias")->with($notificacion);
    }

    
    public function show($id)
    {
        $categorias = Categorias::findOrfail($id);
        
        return view("categorias.show",['categorias'=>$categorias]);
    }

    
    public function edit($id)
    {
        $cat = Categorias::FindOrFail($id);
        return view('categorias.edit',["cat"=>$cat]);
    }

    
    public function update(Request $request, $id)
    {
        $cat = Categorias::FindOrFail($id);
        $cat-> fill([ 
            'nombre' => $request->input('nombre'),

            ]);
        $cat->save();
        $notificacion = array(
            'message' => 'La Categoria fue modificada Correctamente', 
            'alert-type' => 'succes'
        );

        return redirect("/categorias")->with($notificacion);
        
    }

    
    public function destroy($id)
    {
        $cat = Categorias::FindOrFail($id);
        $cat->delete();
        $notificacion = array(
            'message' => 'La Categoria se eliminó Correctamente', 
            'alert-type' => 'succes'
        );

        return redirect("/categorias")->with($notificacion);
    }
}
