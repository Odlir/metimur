<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;

    protected $table="categoria";

    protected $fillable = [
        'id',
        'categoria_nombre',
        'categoria_estado_id',
        'categoria_usuario_creacion_id',
        'categoria_usuario_modificacion_id',
        'created_at',
        'updated_at'
    ];
}
