<?php

namespace App\Controllers;

use App\Models\EstadoModel;
use App\Models\PerfilModel;
use App\Models\UsuarioModel;

class PerfilController extends BaseController
{
	public function __construct()
	{
	}
	/////////////////////////////
	//                         //
	//	        Paginas        //
	//                         //
	/////////////////////////////

	/**
	 * Pagina inicial do módulo
	 */
	public function index()
	{
        $estadoModel      = new EstadoModel();
		$dados['estados'] = $estadoModel->get();

		$perfil      	 = new PerfilModel();
		$dados['perfis'] = $perfil->get();

		$registro                    = new UsuarioModel();
		$dados['registro']           = $registro->get(['usuario_id' => $this->session->get('usuario')['usuario_id']], [], true);
		$dados['registro']['estado'] = $registro->usuarioCidadeEstado($this->session->get('usuario')['usuario_id']);

		return $this->template('perfil', 'index', $dados, true);
	}
}
