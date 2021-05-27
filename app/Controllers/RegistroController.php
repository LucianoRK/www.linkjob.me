<?php

namespace App\Controllers;

use App\Libraries\Aws;
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
        $dados['tipos'] = $usuarioTipoModel->get('tipo_id != 1', ['nome', 'tipo_id']);

        return $this->template('registro', 'create', $dados, false);
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
            //'nome' => 'required',
            //'email' => 'required|valid_email|is_unique[use_usuario.email]',
            //'usuario_tipo' => 'required|not_in_list[1]',
            //'senha' => 'required|string|min_length[6]|regex_match[/[a-zA-Z]/]|regex_match[/[0-9]/]',
            //'senha2' => 'required|string|matches[senha]',
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

        //Uploload das fotos
        if (!empty($_FILES['foto']['name'])) {
            foreach ($_FILES['foto']['name'] as $key => $value) {
                if (!empty($value)) {
                    //Pega a extenção
                    $arrayExplode = explode(".",  $value);
                    $extensao = array_slice($arrayExplode, -1);
                    //Monta o caminho
                    $caminho = 'foto/' . sha1($_FILES['foto']['name'][$key] . date('dmY H:i:s') . rand(0, 9999)) . '.' . $extensao[0];
                    //Prepara o objeto
                    $obj['name'] = $_FILES['foto']['name'][$key];
                    $obj['type'] = $_FILES['foto']['type'][$key];
                    $obj['tmp_name'] = $_FILES['foto']['tmp_name'][$key];
                    $obj['error'] = $_FILES['foto']['error'][$key];
                    $obj['size'] = $_FILES['foto']['size'][$key];

                    $awsLib->s3PutObject($caminho, $obj);
                }
            }
        }

        //Uploload dos videos
        if (!empty($_FILES['video']['name'])) {
            foreach ($_FILES['video']['name'] as $key => $value) {
                if (!empty($value)) {
                    //Pega a extenção
                    $arrayExplode = explode(".",  $value);
                    $extensao = array_slice($arrayExplode, -1);
                    //Monta o caminho
                    $caminho = 'video/' . sha1($_FILES['video']['name'][$key] . date('dmY H:i:s') . rand(0, 9999)) . '.' . $extensao[0];
                    //Prepara o objeto
                    $obj['name'] = $_FILES['video']['name'][$key];
                    $obj['type'] = $_FILES['video']['type'][$key];
                    $obj['tmp_name'] = $_FILES['video']['tmp_name'][$key];
                    $obj['error'] = $_FILES['video']['error'][$key];
                    $obj['size'] = $_FILES['video']['size'][$key];

                    $awsLib->s3PutObject($caminho, $obj);
                }
            }
        }




        return false;

        if ($usuarioModel->save($dadosUsuario)) {
            $this->setFlashdata('success', 'Cadastro realizado com sucesso');

            return redirect()->to(base_url());
        }

        $this->setFlashdata('error', 'Falha ao registrar');

        return redirect()->to(base_url());
    }
}
