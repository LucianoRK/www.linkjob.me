<?php

namespace App\Models;

use App\Models\BaseModel;

class UsuarioPerfilFotoModel extends BaseModel
{
    protected $table = 'usuario_perfil_foto';
    protected $primaryKey = 'usuario_perfil_foto_id';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    protected $useCache = false;

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

    protected $allowedFields = [
        'usuario_perfil_foto_id',
        'usuario_perfil_id',
        'grupo_foto_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}