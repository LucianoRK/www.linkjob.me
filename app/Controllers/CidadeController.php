<?php

namespace App\Controllers;

use App\Models\CidadeModel;

class CidadeController extends BaseController
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
        $request      = $this->request->getVar();
		$cidadeModel  = new CidadeModel;

        $colunas = [
			'cidade_id',
			'estado_id',
			'nome'
		];

		$cidades = $cidadeModel->get(['estado_id' => $request['estado_id']], $colunas, false);

       if (empty($cidades)) {
           return false;
       } 

	   return $this->response->setJson($cidades);
	}
}
