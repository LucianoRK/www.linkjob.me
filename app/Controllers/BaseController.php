<?php

namespace App\Controllers;

use App\Models\CidadeModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */

class BaseController extends Controller
{
	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [];

	/**
	 * Constructor.
	 *
	 * @param RequestInterface  $request
	 * @param ResponseInterface $response
	 * @param LoggerInterface   $logger
	 */
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		$this->session = Services::session();
		$this->router  = Services::router();
		$this->uri     = Services::uri();
	}

	/**
	 * Carrega o template do sistema
	 * 
	 * @param string $escopo caminho da view
	 * @param string|array $arquivos caminho da view
	 * @param array  $dados  Informação para a tela
	 * @param bool   $navBar Verifica se vai carregar a navbar
	 */
	public function template(string $pasta, $arquivos, array $dados = [], bool $navBar = true)
	{
		$dados['session']       = $this->session->get('usuario');
		$dados['responseFlash'] = $this->session->getFlashdata('responseFlash');
		$dados['base']          = $this;
		//$menuModel = new MenuModel;
		if (!empty($this->session->get('logado'))) {
			/*
			if ($this->session->getUser()['grupo_id'] == 1) {
				//$dados['menus'] = $menuModel->get();
			} else {
				$dados['menus'] =  $this->session->getUser()['menus'];
			}
			*/
		}
		if (!$dados['responseFlash']) {
			$dados['responseFlash']['tipo'] = null;
			$dados['responseFlash']['mensagem'] = null;
		}
		echo view('template/header', $dados);
		echo view('template/functions', $dados);
		if ($navBar) {
			echo view('template/navbar', $dados);
			echo view('template/sidebar', $dados);
			//echo view('template/dataGrid', $dados);
		}
		if (is_array($arquivos)) {
			foreach ($arquivos as $arquivo) {
				echo view('app/' . $pasta . '/' . $arquivo, $dados);
			}
		} else {
			echo view('app/' . $pasta . '/' . $arquivos, $dados);
		}
		echo view('template/footer', $dados);
		echo view('app/' . $pasta . '/functions', $dados);

		echo  $dados['responseFlash']['mensagem']; // Fase de teste
	}

	/**
	 * Cria os retornos flash do sistema
	 * 
	 * @param string $tipo  success, error, info
	 * @param string $mensagem
	 * @param string $variavel Nome da variavel
	 * @param int    $tempo tempo da sessão flashdata
	 * 
	 */
	public function setFlashdata(string $tipo = 'info', string $mensagem = '', string $variavel = 'responseFlash', int $tempo = 300)
	{
		$this->session->setFlashdata($variavel, ['tipo' => $tipo, 'mensagem' => $mensagem], $tempo);
	}

	/**
	 * Retorna o nome do controlador
	 * 
	 * @return string nome do controlador
	 */
	public function controllerName(): string
	{
		return str_replace('\App\Controllers\\', '', $this->router->controllerName());
	}

	/**
	 * Retorna o nome do método atual
	 * 
	 * @return string nome do metodo
	 */
	public function methodName(): string
	{
		return  $this->router->methodName();
	}

	/**
	 * Retorna o nome da rota atual
	 * 
	 */
	public function routeName(): string
	{
		return $this->uri->getPath();
	}

	/**
	 * Validar dados das requisições.
	 *
	 * @param  \CodeIgniter\HTTP\IncomingRequest  $request
	 * @param  array $rules - Regras a serem validadas
	 * @return array Array com os erros obtidos
	 */
	protected function validar(IncomingRequest $request, array $rules): array
	{
		$validacoes = Services::validation();
		$validacoes->withRequest($request)->setRules($rules)->run();
		
		return $validacoes->getErrors();
	}

	/**
	 * enviarEmail - Função Padrão para envio de emails
	 * @param string $destinatario Endereço de email
	 * @param string $assunto - Assunto do E-mail
	 * @param string $mensagem - Mensagem do E-mail
	 * @param array  $anexo - ['buffer','name', 'type']
	 */
	public function enviarEmail($destinatario, $assunto = null, $mensagem = false, $anexos = [])
	{
		return true;

		$email = Services::email();
		$email->initialize(["SMTPHost" => env('aws_smtp_host'), "SMTPUser" => env('aws_smtp_key'), "SMTPPass" => env('aws_smtp_secret')]);
		$email->setFrom(env('aws_smtp_email_resposta'));
		$email->setTo($destinatario);
		$email->setSubject($assunto);
		$email->setMessage($mensagem);

		if (!empty($anexos)) {
			foreach ($anexos as $key => $valueAnexo) {
				$type = !empty($valueAnexo['type']) ? $valueAnexo['type'] : 'application/pdf';
				$email->attach($valueAnexo['arquivo'], 'attachment', $valueAnexo['nome'], $type);
			}
		}

		return $email->send();
	}

	public function getCidades() 
	{
		$request      = $this->request->getVar();
		$cidadeModel  = new CidadeModel();

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
