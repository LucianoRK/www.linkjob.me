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

    public function getDadosUsuarioDadosPerfil()
    {
        $this->select('
            usuario_perfil.usuario_perfil_id,
            usuario_perfil.usuario_id,
            usuario_perfil.perfil_id,
            usuario_perfil.created_at,
            use_usuario.nome,
            perfil.nome as nome_perfil,
        ');
        $this->join('use_usuario', 'use_usuario.usuario_id = usuario_perfil.usuario_id', 'LEFT');
        $this->join('perfil', 'perfil.perfil_id = usuario_perfil.perfil_id', 'LEFT');
        $this->where('usuario_perfil.perfil_aprovado IS NULL');

        return $this->find();
    }
}