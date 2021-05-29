<?php

namespace App\Controllers;

use App\Libraries\Aws;
use App\Models\EstadoModel;
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
        $estadoModel      = new EstadoModel();
        $dados['estados'] = $estadoModel->get();

        return $this->template('registro', 'create', $dados);
    }

    /**
     * Cadastro de usuário
     * @return \CodeIgniter\HTTP\Response
     */
    public function store()
    {
        $usuarioModel = new UsuarioModel;
        $awsLib = new Aws(['s3']);
        $request = $this->request->getVar();

        $rules = [
            'nome' => 'required',
            'email' => 'required|valid_email|is_unique[use_usuario.email]',
            'senha' => 'required|string|min_length[6]|regex_match[/[a-zA-Z]/]|regex_match[/[0-9]/]',
            'repita_senha' => 'required|string|matches[senha]',
            'genero' => 'required',
            'data_nascimento' => 'required',
            'cpf' => 'required',
            'rg' => 'required',
            'escolaridade' => 'required',
            'endereco' => 'required',
            'cidade' => 'required',
            'cep' => 'required',
            'celular' => 'required',
            'instagram' => 'required',
            'banco' => 'required',
            'agencia' => 'required',
            'conta' => 'required'
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
            'tipo_id' => 2,
            'cidade_id' => $request['cidade'],
            'nome_artistico' => $request['nome_artistico'],
            'genero' => $request['genero'],
            'data_nascimento' => $request['data_nascimento'],
            'cpf' => $request['cpf'],
            'rg' => $request['rg'],
            'cnpj' => $request['cnpj_mei'],
            'escolaridade' => $request['escolaridade'],
            'area' => $request['area'],
            'instituicao' => $request['instituicao'],
            'idiomas' => $request['idiomas'],
            'endereco' => $request['endereco'],
            'complemento' => $request['complemento'],
            'cep' => $request['cep'],
            'celular' => $request['celular'],
            'instagram' => $request['instagram'],
            'banco' => $request['banco'],
            'agencia' => $request['agencia'],
            'conta' => $request['conta'],
            'tipo_conta' => $request['tipo_conta'],
            'pix' => $request['pix'],
            'picPay' => $request['picpay']
        ];

        if ($usuarioModel->save($dadosUsuario)) {
            $this->setFlashdata('success', 'Cadastro realizado com sucesso');

            return redirect()->to(base_url('logar'));
        }

        $this->setFlashdata('error', 'Falha ao registrar');

        return redirect()->to(base_url('registro'));
    }
}
