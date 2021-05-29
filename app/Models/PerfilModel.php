<?php

namespace App\Models;

use App\Models\BaseModel;

class PerfilModel extends BaseModel
{
    protected $table = 'perfil';
    protected $primaryKey = 'perfil_id';

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
        'perfil_id',
        'nome',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}