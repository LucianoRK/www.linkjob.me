<?php

namespace App\Models;

use CodeIgniter\Model;

class BaseModel extends Model
{

    //////////////////////////////////
    //                              //
    //       FUNÇÕES BÁSICAS        //
    //                              //
    //////////////////////////////////

    /**
     * Busca as informações do modelo
     * @param array  $condicoes Condições do where
     * @param array  $colunas Nomes das colunas ex: ["id","nome","data_adicionado"]
     * @param bool   $first Traz apenas o primeiro registro
     * @param int   $pagina Traz pagina atual na paginação
     * @param bool  $deleted Traz os registros deletados tambem
     * @return array
     */
    public function get($condicoes = [], $colunas = [], $first = false, $orderBy = [], $pagina = false, $deleted = false)
    {
        $colunas = !empty($colunas) ? implode(",", $colunas) : "*";
        $this->select($colunas, FALSE);

        if ($deleted) {
            $this->where($condicoes)->onlyDeleted();
        } else {
            $this->where($condicoes);
        }

        if (!empty($orderBy)) {
            $this->orderBy(key($orderBy), $orderBy[key($orderBy)]);
        }

        if (!empty($pagina)) {
            return $this->pagination($this, $pagina);
        }

        return $first ? $this->first() : $this->find();
    }

    /**
     * Formatar os dados da paginação.
     *
     * @param \CodeIgniter\Model $model Model para fazer a paginação.
     * @param int $currentPage Página atual da paginação.
     * @return array
     */
    public function pagination(Model $model, int $currentPage, $perPage = 15): array
    {
        $data = $model->paginate($perPage, 'default', $currentPage);
        $total = $model->pager->getTotal();

        $from = (($currentPage - 1) * $model->perPage) + 1;

        if ($from > $total) $from = $total;

        $to = $currentPage * $model->perPage;

        if ($to > $total) $to = $total;

        return [
            'current_page'   => $currentPage,
            'first_page_url' => $model->pager->getPageURI($model->pager->getFirstPage()),
            'from'           => $from,
            'last_page'      => $model->pager->getLastPage(),
            'last_page_url'  => $model->pager->getPageURI($model->pager->getLastPage()),
            'next_page_url'  => $model->pager->getNextPageURI(),
            'per_page'       => $model->perPage,
            'prev_page_url'  => $model->pager->getPreviousPageURI(),
            'to'             => $to,
            'total'          => $total,
            'data'           => $data
        ];
    }

    /**
     * Função para dar soft delete no registro atualizando todos os campos que forem necessários.
     * @param int id do registro
     * @param int usuarioId id usuário que deletou o registro
     */
    public function customSoftDelete(int $id, $usuarioId = null)
    {
        return $this->update($id, ['usuario_inativacao_id' => $usuarioId, 'data_inativacao' => 'now()']);
    }
}
