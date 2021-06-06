<?php

namespace App\Controllers;

use App\Models\EstadoModel;
use App\Models\GrupoFotoModel;
use App\Models\PerfilModel;
use App\Models\UsuarioModel;
use App\Models\UsuarioPerfil;
use App\Models\UsuarioPerfilModel;

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

		$grupo                               = new GrupoFotoModel();
		$dados['modelo_promotor_influencer'] = $grupo->get(['perfil_id' => 1], [], false, ['nome' => 'ASC']);
		$dados['cabeleireiro_maquiador']     = $grupo->get(['perfil_id' => 4], [], false, ['nome' => 'ASC']);
		$dados['fotografo_filmaker']         = $grupo->get(['perfil_id' => 6], [], false, ['nome' => 'ASC']);
		$dados['categoria_diretor']          = $grupo->get(['perfil_id' => 8], [], false, ['nome' => 'ASC']);
		$dados['categoria_produtor']         = $grupo->get(['perfil_id' => 9], [], false, ['nome' => 'ASC']);
		$dados['categoria_locacao']          = $grupo->get(['perfil_id' => 10], [], false, ['nome' => 'ASC']);

		return $this->template('perfil', 'create', $dados, true);
	}

	/**
	 * Cadastro de usuário
	 * @return \CodeIgniter\HTTP\Response
	 */
	public function store()
	{
		$request = $this->request->getVar();

		echo "<pre>";
		print_r($request);
		die();

		$usuarioPerfil = new UsuarioPerfil;
		$usuarioId = $this->session->get('usuario')['usuario_id'];

		if (empty($request['perfil'])) {
			$this->setFlashdata('error', 'Nenhum perfil selecionado');

			return redirect()->to('adicionar-perfil');
		}

		foreach ($request['perfil'] as $key => $perfil) {
			$dados = [
				'usuario_id' => $usuarioId,
				'perfil_id' => $perfil,
				'dados' => json_encode($request),
				'perfil_aprovado' => null
			];

			$usuarioPerfil->save($dados);
		}

		$this->setFlashdata('success', 'Perfil adicionado com sucesso');

		return redirect()->to('adicionar-perfil');
	}

	public function pendentesAprovacao()
	{
		$perfis          = new UsuarioPerfilModel();
		$dados['perfis'] = $perfis->get(['perfil_aprovado IS NULL'], [], false);

		return $this->template('perfil', 'pendentesAprovacao', $dados, true);
	}

	public function aprovar()
	{
		$request = $this->request->getVar();

		dd($request);
	}

	public function recusar()
	{
		$request = $this->request->getVar();

		dd($request);
	}

	public function verPerfil($id)
	{
		dd($id);

		return $this->template('perfil', 'verPerfil', [], true);
	}
}
