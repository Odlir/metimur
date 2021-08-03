<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_evaluacion extends Model
{
    use HasFactory;

    protected $table="tipo_evaluacion";

    protected $fillable = [
        'id',
        'tipo_evaluacion_nombre',
        'tipo_evaluacion_estado_id',
        'tipo_evaluacion_usuario_creacion_id',
        'tipo_evaluacion_usuario_modificacion_id',
        'created_at',
        'updated_at'
    ];

}
