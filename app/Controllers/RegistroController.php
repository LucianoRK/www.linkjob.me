<?php

namespace App\Controllers;

use App\Models\DocumentoModel;
use App\Models\EmpresaModel;
use App\Models\EmpresaUsuarioModel;
use App\Models\UsuarioGrupoModel;
use App\Models\UsuarioModel;
use CodeIgniter\HTTP\Response;
use Exception;

class RegistroController extends BaseController
{
    //////////////////////////////////
    //                              //
    //      OPERAÇÕES DE BUSCA      //
    //                              //
    //////////////////////////////////

    //////////////////////////////////
    //                              //
    //    OPERAÇÕES DE CADASTRO     //
    //                              //
    //////////////////////////////////

    /**
     * Cadastro de usuário
     * @return \CodeIgniter\HTTP\Response
     */
    public function create(): Response
    {
        $usuarioModel = new UsuarioModel;
        $empresaModel = new EmpresaModel;
        $empresaUsuarioModel = new EmpresaUsuarioModel;
        $usuarioGrupoModel = new UsuarioGrupoModel;
        $dadosRequest = $this->request->getJSON(true);

        $erros = $this->validarRequisicao($this->request, [
            'celular' => 'required|string|min_length[11]|max_length[15]|regex_match[/^\([0-9]{2}\) [0-9]{4,5}-[0-9]{4}$/]',
            'confirmarSenha' => 'required|string|matches[senha]',
            'email' => 'required|valid_email|max_length[255]|is_unique[use_usuario.email]',
            'empresa' => 'required|string|min_length[3]|max_length[255]',
            'nome' => 'required|string|min_length[3]|max_length[255]',
            'senha' => [
                'rules' => 'required|string|min_length[8]|regex_match[/[a-zA-Z]/]|regex_match[/[0-9]/]',
                'errors' => [
                    'regex_match' => 'Utilize no mínimo uma letra e um número.',
                ],
            ],
        ]);

        if (!empty($erros)) {
            return $this->respond($erros, 422);
        }

        //Inicia as operações de DB
        $this->db->transStart();
        try {
            $usuario = [
                'nome' => $dadosRequest['nome'],
                'email' => $dadosRequest['email'],
                'senha' => password_hash($dadosRequest['senha'], PASSWORD_BCRYPT),
                'celular' => $dadosRequest['celular'],
            ];

            //Cria o usuário
            $usuarioModel->save($usuario);
            $usuarioId = $usuarioModel->insertID('use_usuario_usuario_id_seq');

            //Cria a empresa
            $empresaId = $this->_createEmpresa($usuarioId, $dadosRequest['empresa']);

            //Busca o id do grupo
            $grupo = $usuarioGrupoModel->get(['slug' => 'admin'], ['usuario_grupo_id'], true);

            //Cria o Vinculo da Empresa com o Usuário
            $empresaUsuario = [
                'usuario_id' => $usuarioId,
                'empresa_id' => $empresaId,
                'usuario_grupo_id' => $grupo['usuario_grupo_id']
            ];
            $empresaUsuarioModel->save($empresaUsuario);

            //Gera a pasta Raiz da Empresa
            $pastaRaizId = $this->_createPastaRaiz($usuarioId, $empresaId);

            //Atualiza a empresa padrão no Usuário
            $usuarioModel->update($usuarioId, ['empresa_id_padrao' => $empresaId, 'usuario_criacao_id' => $usuarioId]);

            //Atualiza a pasta raiz na empresa
            $empresaModel->update($empresaId, ['pasta_raiz_id' => $pastaRaizId, 'usuario_criacao_id' => $usuarioId]);

            $this->db->transComplete();
        } catch (Exception $e) {
            return $this->respond(['mensagem' => lang('Errors.banco.validaInsercao')], 422);
        }

        return $this->respond(['mensagem' => lang ('Success.usuario.cadastraUsuario')], 201);
    }

    /**
     * Método para criar uma empresa a partir de um usuario_id e uma empresa
     * @param int $usuarioId id do usuário
     * @param array $empresa dados da empresa
     * @return int|string empresa_id
     */
    private function _createEmpresa($usuarioId, $empresaNome)
    {
        if (empty($usuarioId) || empty($empresaNome)) {
            return null;
        }

        $empresaModel = new EmpresaModel;

        $configuracao = [
            'cor_cabecalho' => env('empresa.cor_cabecalho'),
            'cor_botoes' => env('empresa.cor_botoes'),
            'cor_texto_botoes' => env('empresa.cor_texto_botoes'),
        ];

        $empresa = [
            'usuario_criacao_id' => $usuarioId,
            'nome' => $empresaNome,
            'configuracao' => json_encode($configuracao),
        ];
        $empresaModel->save($empresa);

        return $empresaModel->insertID('ger_empresa_empresa_id_seq');
    }

    /**
     * Função que gera a pasta raiz com base no empresaId e usuarioId
     * @param int $usuarioId id do usuário
     * @param int $empresaId id da empresa
     * @return int|string documentoId da pasta raiz.
     */
    private function _createPastaRaiz($usuarioId, $empresaId)
    {
        $documentoModel = new DocumentoModel;

        if (empty($empresaId) || empty($usuarioId)) {
            return null;
        }

        $pasta = [
            'empresa_id' => $empresaId,
            'usuario_criacao_id' => $usuarioId,
            'nome_original' => 'Meus Documentos',
            'nome_arquivo' => 'Meus Documentos',
            'ip' => $this->request->getIPAddress(),
            'pasta' => true
        ];
        $documentoModel->save($pasta);

        return $documentoModel->insertID('doc_documento_documento_id_seq');
    }
}
