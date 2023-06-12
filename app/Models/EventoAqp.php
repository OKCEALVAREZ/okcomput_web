<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class EventoAqp extends Model
{
    //
    protected $table = 'public.eventoaqp';
    use SoftDeletes;

    protected $fillable = ['nombres', 'email', 'celular', 'lugar_trabajo', 'cargo', 'programa', 'office', 'windows'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
