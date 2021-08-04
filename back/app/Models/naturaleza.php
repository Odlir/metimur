<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class naturaleza extends Model
{
    use HasFactory;
    protected $table="naturaleza";

    protected $fillable = [
        'id',
        'naturaleza_nombre',
        'naturaleza_estado_id',
        'naturaleza_usuario_creacion_id',
        'naturaleza_usuario_modificacion_id',
        'created_at',
        'updated_at'
    ];
}
