<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;
use App\Models\Imagenes;
use App\Models\Vehiculos;
use App\Models\Filtros;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

use Redirect;
use Session;


class ProductosController extends Controller
{
    
    public function index()
    {
    
        $category = Categorias::with('vehiculos')->with('vehiculos.imagenprincipal')->get();

    
        $categorias = $category->map(function($value){
            $value->vehiculos = $value->vehiculos->where('destacado', 1)->take(16);

            return $value;
        });

    
       

       return view('shop.index', ['categorias' => $categorias]);
    }

    public function productos_all()
    {
        
        $products = Vehiculos::with('imagenprincipal')->paginate(16);

       return view('shop.productos_all', ['products' => $products]);
    }



  
    public function show($id)
    {
        

        /*recupero el repuesto_id seleccionado con findOrfail($id)*/    
        $repuesto = Vehiculos::with('imagenprincipal','categoria','filtro')->findOrfail($id);


        $rep_filtros = Filtros::groupBy('id_filtro')->get();
       /*  dd($rep_filtros); */
        return view('shop.show',["repuesto"=>$repuesto, "rep_filtros"=>$rep_filtros]);
    }




    public function buscador($text){
        

        if($text != 'all'){
        $vehiculos = Vehiculos::where('marca','like','%'.$text.'%')
        ->orWhere('modelo','like','%'.$text.'%')    
        ->orWhere('version','like','%'.$text.'%')   
        ->get();
        }else{
            $vehiculos = Vehiculos::get();
        }

       

        return view('parts.search',["vehiculos"=>$vehiculos]);

    

    }
}
