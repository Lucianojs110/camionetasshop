<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Imagenes extends Model
{
    use SoftDeletes;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $dates = ['deleted_at'];
    public $timestamps = true;

    protected $table = 'imagenes';
    public $primaryKey = 'id_imagen';


    protected $fillable = [

        'id_vehiculo',
        'ruta',
    ];


    public function vehiculo(){
        return $this->belongsTo('App\Models\Vehiculos', 'id_vehiculo', 'id_vehiculo');
    }

}
