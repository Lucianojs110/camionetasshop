<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Vehiculos;
use App\Models\Filtros;
use App\Models\Categorias;
use App\Models\Imagenes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Session;

class VehiculosController extends Controller
{
    public function index()
    {
        /* $productos  = Productos::with('categoria')->get(); */

        $producto = Vehiculos::with('imagenprincipal','categoria', 'cliente')->get();
       
      
        return view('vehiculos.index', ['producto' => $producto]);
    }

 
    public function create()
    {
        
        $repuesto = Vehiculos::with('imagenprincipal')->get();

        $categorias = Categorias::get();

        $clientes = Cliente::all();
      
        $filtros = Filtros::get();
        return view("vehiculos.new",['repuesto' => $repuesto, 'categorias'=>$categorias,  'filtros'=>$filtros, 'clientes' => $clientes]);

    }

    
    public function store(Request $request)
    {

       
            $prod = new Vehiculos();
            if($request->input('envio')){
                $envio =  1;
            }else{
                $envio = 0;
            }
            if($request->input('destacado')){
                $destacado =  1;
            }else{
                $destacado = 0;
            }
            $prod-> fill([
                    'id_categoria'=> $request->input('id_categoria'),
                    'id_cliente'=> $request->input('id_cliente'),
                    'marca' => $request->input('marca'),
                    'modelo' => $request->input('modelo'),
                    'combustible' => $request->input('combustible'),
                    'uso' => $request->input('uso'),
                    'año' => $request->input('año'),
                    'motor' => $request->input('motor'),
                    'km' => $request->input('km'),
                    'km' => $request->input('km'),
                    'provincia' => $request->input('provincia'),
                    'ciudad' => $request->input('ciudad'),
                    'version' => $request->input('version'),
                    'descripcion' => $request->input('descripcion'),     
                    'precio' => $request->input('precio'),
                    'precio_cliente' => $request->input('precio_cliente'),
                    'envio' => $envio,
                    'destacado' => $destacado
            ]);
            
            $prod->save();

            
            $valor = $request->input('valor');
            $filtro = $request->input('filtros'); 
            $descripcion = $request->input('atributos');

         

            $syncro = [];
            $i = 0;
    
            
            if($valor){
                foreach ($valor as $c) {
                    $syncro[$valor[$i]] = ['descripcion' => $descripcion[$i]];
                    $i++;
                }
                }

            $prod->filtro()->sync($syncro);  //sincronizar relacion muchos a muchos belongsToMany
    
         
            if($request->hasFile('ruta')){
                
                foreach($request->File('ruta') as $imagen){
                
                    $img = new Imagenes();

                    $img-> fill([
                        'ruta' => 'storage/bm/'.$imagen->getClientOriginalName(),
                    ]); 

                    $img->vehiculo()->associate($prod->id_vehiculo)->first();
                    
                    $img->save();
                    
                    //Storage::putFileAs('bm', $imagen, $imagen->getClientOriginalName());
                    $imagen->move('storage/bm', $imagen->getClientOriginalName());
               
                }
            
            }
                  
            $notificacion = array(
                'message' => 'El vehiculo se cargo Correctamente', 
                'alert-type' => 'succes'
            );

            
           
        Session::flash('success', 'vehiculo Agregado con exito');
        return redirect("admin/vehiculos")->with($notificacion); 
       
    }

    
    public function show($id)
    {
        
        $repuesto = Vehiculos::with('imagenprincipal','categoria','filtro')->FindOrFail($id);
        $categorias = Categorias::get();
        $filtros = Filtros::get();
        $clientes = Cliente::all();

        return view("vehiculos.show",['repuesto'=> $repuesto,'clientes'=> $clientes,'filtros'=> $filtros,'categorias'=> $categorias]);
        
    }

 
    public function edit($id)
    {
        $repuesto = Vehiculos::with('imagenprincipal','categoria','filtro')->FindOrFail($id);
        $categorias = Categorias::get();
        $filtros = Filtros::get();
        $clientes = Cliente::all();
       
        return view("vehiculos.edit",['repuesto'=> $repuesto,'categorias'=>$categorias,'filtros'=>$filtros, 'clientes'=>$clientes]);
    }

   
    public function update(Request $request, $id)
    {
       
        $prod = Vehiculos::with('imagenprincipal','categoria','filtro')->FindOrFail($id);
        $categorias = Categorias::get();
        $filtros = Filtros::get();

        if($request->input('envio')){
            $envio =  1;
        }else{
            $envio = 0;
        }
        if($request->input('destacado')){
            $destacado =  1;
        }else{
            $destacado = 0;
        }

        $prod-> fill([
            'id_categoria'=> $request->input('id_categoria'),
            'id_cliente'=> $request->input('id_cliente'),
            'marca' => $request->input('marca'),
            'modelo' => $request->input('modelo'),
            'combustible' => $request->input('combustible'),
            'uso' => $request->input('uso'),
            'año' => $request->input('año'),
            'motor' => $request->input('motor'),
            'km' => $request->input('km'),
            'km' => $request->input('km'),
            'provincia' => $request->input('provincia'),
            'ciudad' => $request->input('ciudad'),
            'version' => $request->input('version'),
            'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio'),
            'precio_cliente' => $request->input('precio_cliente'),
            'envio' => $envio,
            'destacado' => $destacado
        ]);
        $prod->save();


            $valor = $request->input('valor');
            $filtro = $request->input('filtros'); 
            $descripcion = $request->input('atributos');

            $syncro = [];
            $i = 0;

            if($valor){
            foreach ($valor as $c) {
                $syncro[$valor[$i]] = ['descripcion' => $descripcion[$i]];
                $i++;
            }
            }

            $prod->filtro()->sync($syncro);  //sincronizar relacion muchos a muchos belongsToMany

            
            //recibe el name (array con las rutas) => ('ruta')
            if($request->hasFile('ruta')){
                
                foreach($request->File('ruta') as $imagen){
                
                    $img = new Imagenes();

                    $img-> fill([
                        'ruta' => 'storage/bm/'.$imagen->getClientOriginalName(),
                    ]); 

                    $img->vehiculo()->associate($prod->id_vehiculo)->first();
                    
                    $img->save();
                    
                    //Storage::putFileAs('bm', $imagen, $imagen->getClientOriginalName());
                    $imagen->move('storage/bm', $imagen->getClientOriginalName());
               
                }
            
            }
   


            $notificacion = array(
                'message' => 'El vehiculo se modificó correctamente', 
                'alert-type' => 'succes'
            );

            Session::flash('success', 'Vehiculo editado con exito');
            return redirect("admin/vehiculos")->with($notificacion); 


    }

    
    public function destroy(Request $request,$id)
    {
        set_time_limit (0);

        $repuesto = Vehiculos::with('imagenprincipal','categoria')->FindOrFail($id);

        foreach($repuesto->imagenprincipal as $img){
            $imagen= Imagenes::find($img->id_imagen);
            
            if($imagen){
                Storage::delete($imagen->ruta);

                
                /* Storage::delete('bm/', $imag, $imag->getClientOriginalName()); */

                
                $imagen->delete();
            }
        }
        
        $repuesto->delete();
       
        $notificacion = array(
            'message' => 'El vehiculo ha sido eliminado Correctamente', 
            'alert-type' => 'succes'
        );

        return redirect('admin/vehiculos')->with($notificacion);
        
    }

    public function destroy_img($id)
    {

       
        $imagen = Imagenes::findOrfail($id);
        $id_vehiculo = $imagen->id_vehiculo;

        

            if($imagen){
                Storage::delete($imagen->ruta);
                $imagen->delete();
            }
        
       
        $notificacion = array(
            'message' => 'La imagen se eliminó Correctamente', 
            'alert-type' => 'succes'
        );

        return redirect("admin/vehiculos/".$id_vehiculo."/edit")->with($notificacion);

    }


    
}
