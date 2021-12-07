<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Session;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Cliente::all();
      

        return view('clientes.index', ['clients' => $clients]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::all();
        

        return view("clientes.new",['clientes' => $clientes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clients = new Cliente();
            $clients-> fill([
                    
                    'nombre' => $request->input('nombre'),
                    'apellido' => $request->input('apellido'),
                    'email' => $request->input('email'),
                    'provincia' => $request->input('provincia'),
                    'ciudad' => $request->input('ciudad'),
                    'direccion' => $request->input('direccion'),
                    'telefono' => $request->input('telefono'),
            ]);
            $clients->save();

            $notificacion = array(
                'message' => 'El cliente se cargo Correctamente', 
                'alert-type' => 'succes'
            );
            Session::flash('success', 'Registro Creado Correctamente');
            return redirect("/clientes")->with($notificacion); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes = Cliente::findOrfail($id);
        
        return view("clientes.show",['clientes'=> $clientes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = cliente::findOrfail($id);
        
        return view("clientes.edit",['clientes'=> $clientes]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $clientes = cliente::findOrfail($id);
        $clientes-> fill([
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'email' => $request->input('email'),
            'provincia' => $request->input('provincia'),
            'ciudad' => $request->input('ciudad'),
            'direccion' => $request->input('direccion'),
            'telefono' => $request->input('telefono')  
        ]);
        $clientes->save();
        
        $notificacion = array(
            'message' => 'El cliente se modificó Correctamente', 
            'alert-type' => 'succes'
        );
        Session::flash('success', 'Registro editado Correctamente');
        return redirect("/clientes")->with($notificacion); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $clientes = cliente::findOrfail($id);
        $clientes->delete();
       
        $notificacion = array(
            'message' => 'El cliente ha sido eliminado Correctamente', 
            'alert-type' => 'succes'
        );

        return redirect('/clientes')->with($notificacion);
    }
}
