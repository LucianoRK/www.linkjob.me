<?php

namespace App\Controllers;

use App\Models\EstadoModel;
use App\Models\GrupoFotoModel;
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
		return $this->template('perfil', 'index', [], true);
	}

	public function create()
	{
		$registro          = new UsuarioModel();
		$dados['registro'] = $registro->get(['usuario_id' => $this->session->get('usuario')['usuario_id']], [], true);

		$perfil      	 = new PerfilModel();
		$dados['perfis'] = $perfil->get([], [], false, ['perfil_id' => 'ASC']);

		$grupo_modelo_promotor_influencer    = new GrupoFotoModel();
		$dados['modelo_promotor_influencer'] = $grupo_modelo_promotor_influencer->get(['perfil_id' => 1], [], false, ['nome' => 'ASC']);


		$dados['cabeleireiro_maquiador'] = $grupo_modelo_promotor_influencer->get(['perfil_id' => 4], [], false, ['nome' => 'ASC']);

		return $this->template('perfil', 'create', $dados, true);
	}

	/**
     * Cadastro de usuário
     * @return \CodeIgniter\HTTP\Response
     */
    public function store()
    {
		$request = $this->request->getVar();
		
		dd($request);
	}
}
