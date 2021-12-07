<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categorias extends Model
{
    use SoftDeletes;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $dates = ['deleted_at'];

    protected $table = 'categorias';
    public $primaryKey = 'id_categoria';

    public $timestamps = true;

    protected $fillable = [

        'nombre',
        
    ];


    public function vehiculos(){
        return $this->hasMany('App\Vehiculos', 'id_categoria', 'id_categoria');
    }
}
