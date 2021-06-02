<?php

namespace App\Models;

use App\Models\BaseModel;

class UsuarioModel extends BaseModel
{
    protected $table = 'use_usuario';
    protected $primaryKey = 'usuario_id';
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
        'usuario_id',
        //'usuario_uuid',
        'tipo_id',
        'cidade_id',
        'nome',
        'email',
        'senha',
        'token_recuperar_senha',
        'nome_artistico',
        'genero',
        'data_nascimento',
        'cpf',
        'rg',
        'cnpj',
        'escolaridade',
        'area',
        'instituicao',
        'idiomas',
        'endereco',
        'complemento',
        'cep',
        'celular',
        'instagram',
        'banco',
        'agencia',
        'conta',
        'tipo_conta',
        'pix',
        'pic_pay',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * Pega as informações de empresa e grupo do usuário
     * @param array|string  $condicoes Condições do where
     * @param array  $colunas Nomes das colunas ex: ["id","nome","data_adicionado"]
     * @param bool   $first Traz apenas o primeiro registro
     * @param array  $orderBy Monta a ordenação do registro
     * @param int    $pagina Traz pagina atual na paginação
     * @return array
     */
    /*
    public function getUsuarioEmpresaGrupo($condicoes = [], $colunas = [], $first = false, $orderBy = [], $pagina = false)
    {
        $colunas = !empty($colunas) ? implode(",", $colunas) : "*";
        $this->select($colunas, FALSE);
        $this->join('ger_empresa_usuario geu', 'geu.usuario_id = use_usuario.usuario_id');
        $this->join('use_usuario_grupo uug', 'uug.usuario_grupo_id = geu.usuario_grupo_id');
        $this->where($condicoes);

        if (!empty($orderBy)) {
            $this->orderBy(key($orderBy), $orderBy[key($orderBy)]);
        }

        if (!empty($pagina)) {
            return $this->pagination($this, $pagina);
        }

        return $first ? $this->first() : $this->find();
    }
    */

    public function getUsuarioEndereco($usuario_id)
    {
        $this->select('
            use_usuario.tipo_id,
            use_usuario.nome,
            use_usuario.email,
            use_usuario.senha,
            use_usuario.nome_artistico,
            use_usuario.genero,
            use_usuario.data_nascimento,
            use_usuario.cpf,
            use_usuario.rg,
            use_usuario.cnpj,
            use_usuario.escolaridade,
            use_usuario.area,
            use_usuario.instituicao,
            use_usuario.idiomas,
            use_usuario.endereco,
            use_usuario.complemento,
            use_usuario.cep,
            use_usuario.celular,
            use_usuario.instagram,
            use_usuario.banco,
            use_usuario.agencia,
            use_usuario.conta,
            use_usuario.tipo_conta,
            use_usuario.pix,
            use_usuario.pic_pay,
            cidade.cidade_id,
            cidade.estado_id
        ');
        $this->join('cidade', 'use_usuario.cidade_id = cidade.cidade_id', 'LEFT');
        $this->where('use_usuario.usuario_id', $usuario_id);

        return $this->first();
    }
}
