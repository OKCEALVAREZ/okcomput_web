<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DellEvento extends Model
{
    protected $table = 'dell_eventos';
    use SoftDeletes;

    protected $fillable = ['nombres', 'correo', 'telefono', 'cargo', 'empresa', 'modalidad', 'flag_portatil', 'flag_escritorio', 'flag_estacion', 'flag_servidor', 'organizacion', 'informacion'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
