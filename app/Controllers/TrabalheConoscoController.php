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
		$estadoModel      = new EstadoModel();
		$dados['estados'] = $estadoModel->get();

		return $this->template('trabalheConosco', 'index', $dados);
	}
}
