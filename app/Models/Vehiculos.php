<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Vehiculos extends Model
{
    use SoftDeletes;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $dates = ['deleted_at'];
    public $timestamps = true;

    protected $table = 'vehiculos';
    public $primaryKey = 'id_vehiculo';


    protected $fillable = [
        'id_categoria',
        'id_cliente',
        'marca',
        'modelo',
        'version',
        'año',
        'motor',
        'combustible',
        'caja',
        'km',
        'uso',
        'provincia',
        'ciudad',
        'descripcion',
        'precio',
        'precio_cliente',
        'envio',
        'destacado'
    ];


    public function categoria(){
        return $this->belongsTo('App\Models\Categorias', 'id_categoria', 'id_categoria');
    }

    public function cliente(){
        return $this->belongsTo('App\Models\Cliente', 'id_cliente', 'id_cliente');
    }

  
    public function imagenprincipal(){
        return $this->hasMany('App\Models\Imagenes', 'id_vehiculo', 'id_vehiculo');
    }


    public function filtro(){   //relacion de la tabla intermedia
        return $this->belongsToMany('App\Models\Filtros', 'filtro_vehiculo', 'id_vehiculo', 'id_filtro')->withpivot('descripcion');
    
    }
}