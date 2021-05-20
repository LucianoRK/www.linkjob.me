<?php

namespace App\Controllers;

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
			return $this->template('login', 'index', [], false);
		}
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

		var_dump($request);
		//Rules
		$rules = [
			'email' => 'required|valid_email',
			'senha' => 'required|min_length[6]'
		];

		//Validação das rules
		if (!$this->validate($rules)) {
			$this->setFlashdata('error', 'Usuário ou senha incorreto !');

			return redirect()->to(base_url());
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
			$this->setFlashdata('error', 'Usuário ou senha incorreto !');

			return redirect()->to(base_url());
		}



		//Validação da senha
		if (!password_verify($request['senha'],  $dadosUsuario['senha'])) {
			$this->setFlashdata('error', 'Usuário ou senha incorreto !');

			return redirect()->to(base_url());
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

		return redirect()->to('home');
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
