<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
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
    public function store()
    {
        $usuarioModel = new UsuarioModel;
        $request = $this->request->getVar();

        $rules = [
            'nome' => 'required',
            'email' => 'required|valid_email|is_unique[use_usuario.email]',
            'usuario_tipo' => 'required',
            'senha' => 'required|string|min_length[6]|regex_match[/[a-zA-Z]/]|regex_match[/[0-9]/]',
			'senha2' => 'required|string|matches[senha]',
        ];

        $erros = $this->validar($this->request, $rules);

        if ($erros) {
            $this->setFlashdata('error', json_encode($erros));
            
            return redirect()->to(base_url('registro'));
        }

        $dadosUsuario = [
            'nome' => $request['nome'],
            'senha' => password_hash($request['senha'], PASSWORD_BCRYPT),
            'email' => $request['email'],
            'tipo_id' => $request['usuario_tipo'],
            'cadastro_aprovado' => 'f'
        ];

        if($usuarioModel->save($dadosUsuario)){
            $this->setFlashdata('success', 'Cadastro realizado com sucesso');
            
            return redirect()->to(base_url());
        }

        $this->setFlashdata('error', 'Falha ao registrar');

        return redirect()->to(base_url());
        
    }
}
