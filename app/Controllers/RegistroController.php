<?php

namespace App\Controllers;

use App\Models\UsuarioTipo;
use CodeIgniter\HTTP\Response;

class RegistroController extends BaseController
{
    //////////////////////////////////
    //                              //
    //      OPERAÇÕES DE BUSCA      //
    //                              //
    //////////////////////////////////

    //////////////////////////////////
    //                              //
    //    OPERAÇÕES DE CADASTRO     //
    //                              //
    //////////////////////////////////

    /**
     * tela de registro de usuário
     */
    public function create()
    {
        $usuarioTipoModel = new UsuarioTipo;
        $dados['tipos'] = $usuarioTipoModel->get([], ['nome', 'tipo_id']);

        return $this->template('registro', 'create', $dados, false);
    }

    /**
     * Cadastro de usuário
     * @return \CodeIgniter\HTTP\Response
     */
    public function store() //: Response
    {
        $request = $this->request->getVar();

        $rules = [
            'username' => 'required',
            'password' => 'required|min_length[10]'
        ];

        $erros = $this->validar($this->request, $rules);

        if ($erros) {
            $this->setFlashdata('error', json_encode($erros));
            
            return redirect()->to(base_url('registro'));
        }

        //password_hash($request['senha'], PASSWORD_BCRYPT);
    }
}
