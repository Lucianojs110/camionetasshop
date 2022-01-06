<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;
use App\Models\Imagenes;
use App\Models\Vehiculos;
use App\Models\Filtros;
use Illuminate\Support\Facades\DB;

use Redirect;
use Session;


class ProductosController extends Controller
{
    
    public function index()
    {
        /* $productos  = Productos::with('categoria')->get(); */

        /* dd($productos); */
        $category = Categorias::with('vehiculos')->with('vehiculos.imagenprincipal')->get();

        $categorias = $category->map(function($value){
            $value->vehiculos = $value->vehiculos->take(10);

            return $value;
        });

    
        /*Union de tablas(Tramites-Empresas-Vehiculos_empresa) para la obtencion de los vehiculos */
        $rep = DB::table('categorias')/*1er TABLA: Tramites */
                            ->select('vehiculos.marca','vehiculos.id_categoria')
                            ->where('categorias.created_at','!=', NULL)
                            ->leftJoin('vehiculos', 'categorias.id_categoria', '=', 'vehiculos.id_categoria') /*2da TABLA: Empresas */
                            ->get();  

       return view('shop.index', ['categorias' => $categorias]);
    }

  
    public function show($id)
    {
        

        /*recupero el repuesto_id seleccionado con findOrfail($id)*/    
        $repuesto = Vehiculos::with('imagenprincipal','categoria','filtro')->findOrfail($id);


        $rep_filtros = Filtros::groupBy('id_filtro')->get();
       /*  dd($rep_filtros); */
        return view('shop.show',["repuesto"=>$repuesto, "rep_filtros"=>$rep_filtros]);
    }




    public function buscador(Request $request){
        

    
        $vehiculos = Vehiculos::where('marca','like','%'.$request->texto.'%')
        ->orWhere('modelo','like','%'.$request->texto.'%')    
        ->orWhere('version','like','%'.$request->texto.'%')   
        ->get();

       

        return view('parts.search',["vehiculos"=>$vehiculos]);

    

    }
}
