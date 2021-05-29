<?php

namespace App\Controllers;

use App\Models\EstadoModel;

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

		return $this->template('perfil', 'index', $dados, true);
	}
}
