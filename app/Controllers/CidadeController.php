<?php

namespace App\Controllers;

use App\Models\CidadeModel;
use App\Models\EstadoModel;

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
        $request        = $this->request->getVar();
		$cidades_banco  = new CidadeModel();

        $colunas = [
			'cidade_id',
			'estado_id',
			'nome'
		];

		$cidades = $cidades_banco->get(['estado_id' => $request['estado_id']], $colunas, false);

       if ($cidades) {
            return json_encode($cidades);
       } else {
            return false;
       }
	}
}
