<?php

namespace App\Models;

use App\Models\BaseModel;

class UsuarioPerfil extends BaseModel
{
    protected $table = 'usuario_perfil';
    protected $primaryKey = 'usuario_perfil_id';
    //protected $uuidColumn = 'usuario_uuid';

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
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
