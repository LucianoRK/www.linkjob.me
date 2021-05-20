<?php

namespace App\Controllers;

class HomeController extends BaseController
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
		
		return $this->template('home', 'index', [], false);	
	}
}
