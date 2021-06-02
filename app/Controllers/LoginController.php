<?php

namespace App\Controllers;

use App\Libraries\Aws;
use App\Models\UsuarioModel;

class LoginController extends BaseController
{
	public function __construct()
	{
	}

	/////////////////////////////
	//                         //
	//	       Paginas         //
	//                         //
	/////////////////////////////

	/**
	 * Pagina inicial do módulo
	 */
	public function index()
	{
		if ($this->session->get('logado')) {
			return redirect()->to('/home');
		} else {
			return $this->template('login', 'index', []);
		}
	}

	/**
	 * Tela para digitar o e-mail de redefir senha
	 */
	public function recuperarSenha()
	{
		return $this->template('login', 'recuperarSenha', []);
	}

	/**
	 * Tela para digitar as novas senhas
	 * @param string $token token de recuperar senha
	 */
	public function redefinirSenha($token)
	{

		$usuarioModel = new UsuarioModel;

		$colunas = [
			'usuario_id',
			'email',
			'senha'
		];

		//Busca o usário
		$dadosUsuario = $usuarioModel->get(['token_recuperar_senha' => $token], $colunas, true);

		//Validação das rules
		if (empty($dadosUsuario)) {
			$this->setFlashdata('error', 'Link inválido');

			return redirect()->to(base_url());
		}

		return $this->template('login', 'redefinirSenha', ['token' => $token]);
	}

	/////////////////////////////
	//                         //
	//	        CRUD           //
	//                         //
	/////////////////////////////

	/////////////////////////////
	//                         //
	//	   Outras funções      //
	//                         //
	/////////////////////////////

	/**
	 * Faz o login no sistema
	 * 
	 * @param string $usuario 
	 * @param string $senha
	 */
	public function login()
	{
		//Requests
		$request = $this->request->getVar();
		$usuarioModel = new UsuarioModel;

		//Rules
		$rules = [
			'email' => 'required|valid_email',
			'senha' => 'required|min_length[6]'
		];

		$erros = $this->validar($this->request, $rules);

        if ($erros) {
            $this->setFlashdata('error', json_encode($erros));
            
            return redirect()->to('/logar');
        }

		$colunas = [
			'usuario_id',
			'email',
			'senha'
		];

		//Busca o usário
		$dadosUsuario = $usuarioModel->get(['email' => $request['email']], $colunas, true);

		//Validação das rules
		if (empty($dadosUsuario)) {
			$this->setFlashdata('error', 'Usuário ou senha incorreto!');

			return redirect()->to('/logar');
		}

		//Validação da senha
		if (!password_verify($request['senha'],  $dadosUsuario['senha'])) {
			$this->setFlashdata('error', 'Usuário ou senha incorreto!');

			return redirect()->to('/logar');
		}

		if (password_needs_rehash($dadosUsuario['senha'], PASSWORD_BCRYPT)) {
			$usuario['senha'] = password_hash($request['senha'], PASSWORD_BCRYPT);
			$usuarioModel->update($dadosUsuario['usuario_id'], $usuario);
		}

		$dadosPermissao = [];
		$menus = [];

		//Monta o array da sessão
		$sessionData = [
			'usuario' => $dadosUsuario,
			'permissao' => $dadosPermissao,
			'menus' => $menus,
			'logado' => TRUE
		];

		//Grava na sessão as informações
		$this->session->set($sessionData);

		$this->setFlashdata('success', 'Usuário logado com sucesso!');
		
		return redirect()->to('/home');
	}

	/**
	 * Atualiza a senha do redefinir senha
	 */
	public function recuperaSenhaEnviarEmail()
	{
		//Requests
		$request = $this->request->getVar();
		$usuarioModel = new UsuarioModel;

		//Rules
		$rules = [
			'email' => 'required|valid_email',
		];

		$erros = $this->validar($this->request, $rules);

        if ($erros) {
            $this->setFlashdata('error', json_encode($erros));
            
            return redirect()->to(base_url());
        }

		$colunas = [
			'usuario_id',
			'email',
			'senha',
			'token_recuperar_senha'
		];

		//Busca o usário
		$dadosUsuario = $usuarioModel->get(['email' => $request['email']], $colunas, true);

		//Validação das rules
		if (empty($dadosUsuario)) {
			$this->setFlashdata('error', 'E-mail não encontrado.');

			return redirect()->to(base_url());
		}

		//gera o token
		$token = sha1($dadosUsuario['usuario_id'] . date("H:i:s"));
		//Atualiza o token de recuperar senha
		$usuarioModel->update($dadosUsuario['usuario_id'], ['token_recuperar_senha' => $token]);

		$dados = [
			'link' => base_url() . '/login/redefinirSenha/' .$token
		];

		if ($this->enviarEmail($dadosUsuario['email'], 'Recuperação de conta', view('template/email/recuperarSenha', $dados))) {
			$this->setFlashdata('success', 'E-mail enviado com sucesso');
		} else {
			$this->setFlashdata('error', 'Falha ao encaminhar o e-mail');
		}

		return redirect()->to('/');
	}

	/**
	 * Atualiza a senha do redefinir senha
	 * @param string $token token de recuperar senha
	 */
	public function redefinirSenhaUpdate($token)
	{
		$request = $this->request->getVar();
		$usuarioModel = new UsuarioModel;

		//Rules
		$rules = [
			'senha' => 'required|string|min_length[6]|regex_match[/[a-zA-Z]/]|regex_match[/[0-9]/]',
			'senha2' => 'required|string|matches[senha]',
		];

		$erros = $this->validar($this->request, $rules);

        if ($erros) {
			$erro['mensagem'] = 'As senhas devem conter no mínimo 6 com letras e números';
            $this->setFlashdata('error', json_encode($erros));
            
            return $this->template('login', 'redefinirSenha', ['token' => $token]);
        }

		$colunas = [
			'usuario_id',
			'email',
			'senha'
		];

		//Busca o usário
		$dadosUsuario = $usuarioModel->get(['token_recuperar_senha' => $token], $colunas, true);

		//Validação das rules
		if (empty($dadosUsuario)) {
			$this->setFlashdata('error', 'Link inválido');

			return redirect()->to(base_url());
		}

		$dadosUpdate = [
			'senha' => password_hash($request['senha'], PASSWORD_BCRYPT),
			'token_recuperar_senha' => null
		];

		$usuarioModel->update($dadosUsuario['usuario_id'], $dadosUpdate);

		$this->setFlashdata('error', 'Senha alterada com sucesso');

		return redirect()->to('/');
	}

	/**
	 * Faz o logout do sistema
	 */
	public function logout()
	{
		$this->session->destroy();
		return redirect()->to('/');
	}
}
