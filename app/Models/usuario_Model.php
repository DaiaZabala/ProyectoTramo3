<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Modules;

class usuario_Model extends Model //pampos definidos para el registro de un usuario
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre', 'apellido', 'usuario', 'email', 'pass', 'perfil_id', 'baja', 'created_at'];
}
