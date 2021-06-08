<?php

namespace App\Controllers;

use App\Libraries\Aws;
use App\Models\EstadoModel;
use App\Models\UsuarioModel;
use App\Models\UsuarioTipo;
use CodeIgniter\HTTP\Response;

class UsuarioController extends BaseController
{
    public function index()
    {
        $estadoModel      = new EstadoModel();
        $dados['estados'] = $estadoModel->get();
        
        $usuarioModel      = new UsuarioModel();
        $dados['usuarios'] = $usuarioModel->get();
        
        return $this->template('usuario', 'index', $dados);
    }

    public function create()
    {
    }

    /**
     * Cadastro de usuário
     * @return \CodeIgniter\HTTP\Response
     */
    public function store()
    {
    }

    public function show($id)
    {
    }

    /**
     * Editar cadastro
     * @return \CodeIgniter\HTTP\Response
     */
    public function edit($id)
    {
        if (empty($id)) {
			$this->setFlashdata('error', 'Nenhum usuário encontrado');

			return redirect()->to('/usuarios');
		}

        $estadoModel      = new EstadoModel();
        $dados['estados'] = $estadoModel->get();

        $usuarioModel       = new UsuarioModel();
		$dados['registro']  = $usuarioModel->get(['usuario_id' => $id], [], true);

        if (empty($dados['estados']) || empty($dados['registro'])) {
			$this->setFlashdata('error', 'Nenhum usuário encontrado');

			return redirect()->to('/usuarios');
		}

        return $this->template('usuario', 'edit', $dados, true);
    }

    /**
     * Salva a edição
     * @return \CodeIgniter\HTTP\Response
     */
    public function update()
    {
        $request = $this->request->getVar();
        
        dd($request);
    }

    public function destroy()
    {
    }
}
