<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_documento extends Model
{
    use HasFactory;

    protected $table="tipo_documento";

    protected $fillable = [
        'id',
        'tipo_documento_nombre',
        'tipo_documento_estado_id',
        'tipo_documento_usuario_creacion_id',
        'tipo_documento_usuario_modificacion_id',
        'created_at',
        'updated_at'
    ];
}
