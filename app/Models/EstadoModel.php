<?php

namespace App\Models;

use App\Models\BaseModel;

class EstadoModel extends BaseModel
{
    protected $table = 'estados';
    protected $primaryKey = 'estado_id';
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
        'estado_id',
        'nome',
        'uf',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
