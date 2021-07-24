<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class industria extends Model
{
    use HasFactory;

    protected $table="industrias";

    protected $fillable = [
        'id',
        'industria_nombre',
        'industria_estado_id',
        'industria_usuario_creacion_id',
        'industria_usuario_modificacion_id',
        'created_at',
        'updated_at'
    ];

}
