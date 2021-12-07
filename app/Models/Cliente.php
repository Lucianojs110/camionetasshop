<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use SoftDeletes;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $dates = ['deleted_at'];
    public $timestamps = true;

    protected $table = 'clientes';
    public $primaryKey = 'id_cliente';


    protected $fillable = [
      
        'nombre',
        'apellido',
        'email',
        'provincia',
        'ciudad',
        'direccion',
        'telefono'
    ];
}