<?php

namespace App\Controllers;

use App\Models\EstadoModel;
use App\Models\UsuarioTipo;

class TrabalheConoscoController extends BaseController
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
		$estadoModel = new EstadoModel();
		$categorias = new UsuarioTipo();

		$colunas = [
			'tipo_id',
			'nome'
		];

		$dados['estados'] = $estadoModel->get([], $colunas);
		$dados['categorias'] = $categorias->get();

		return $this->template('trabalheConosco', 'index', $dados);
	}
}
