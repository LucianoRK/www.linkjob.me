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
		$estados	      = new EstadoModel();
		$dados['estados'] = $estados->get();

		$colunas = [
			'tipo_id',
			'nome'
		];

		$categorias          = new UsuarioTipo();
		$dados['categorias'] = $categorias->get();

		return $this->template('trabalheConosco', 'index', $dados, true);	
	}
}
