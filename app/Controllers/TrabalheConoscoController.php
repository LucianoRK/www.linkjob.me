<?php

namespace App\Controllers;

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
		return $this->template('trabalheConosco', 'index', [], true);	
	}
}
