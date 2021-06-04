<?php

namespace App\Models;

use App\Models\BaseModel;

class UsuarioPerfilModel extends BaseModel
{
    protected $table = 'usuario_perfil';
    protected $primaryKey = 'usuario_perfil_id';

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
        'usuario_perfil_id',
        'usuario_id',
        'perfil_id',
        'dados',
        'perfil_aprovado',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}