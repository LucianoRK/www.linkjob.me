<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Rotas Publicas
$routes->get('/', 'HomeController::index');
$routes->get('/home', 'HomeController::index');
$routes->get('/logar', 'LoginController::index');
$routes->get('/logout', 'LoginController::logout');
$routes->get('/trabalhe-conosco', 'LoginController::logout');
$routes->get('/contratar', 'LoginController::logout');

/**
 * --------------------------------------------------------------------
 * Login
 * --------------------------------------------------------------------
 */
$routes->group('login', function ($routes) {
	$routes->post('', 'LoginController::login');
	$routes->get('recuperarSenha', 'LoginController::recuperarSenha');
	$routes->get('redefinirSenha/(:alphanum)', 'LoginController::redefinirSenha/$1');
	//Funcionalidades
	$routes->post('recuperaSenhaEnviarEmail', 'LoginController::recuperaSenhaEnviarEmail');
	$routes->post('redefinirSenhaUpdate/(:alphanum)', 'LoginController::redefinirSenhaUpdate/$1');
});

/**
 * --------------------------------------------------------------------
 * Login
 * --------------------------------------------------------------------
 */
$routes->group('registro', function ($routes) {
	$routes->get('', 'RegistroController::create');
	$routes->post('', 'RegistroController::store');
});

// rotas autenticadas
$routes->group('', ['filter' => 'sessao'], function ($routes) {

	/**
	 * --------------------------------------------------------------------
	 * Tela inicial
	 * --------------------------------------------------------------------
	 */

	$routes->get('/home', 'HomeController::index');

	/**
	 * --------------------------------------------------------------------
	 * Usuário
	 * --------------------------------------------------------------------
	 */
	$routes->group('usuario', function ($routes) {
		// Páginas
		$routes->get('/', 'UsuarioController::index');
		$routes->get('perfil', 'UsuarioController::perfil');
		$routes->post('editarPerfil', 'UsuarioController::updatePerfil');
		$routes->get('adicionar', 'UsuarioController::create');
		$routes->get('alterar/(:num)', 'UsuarioController::edit/$1');
		// DataGrid
		$routes->post('getDataGrid/(:alphanum)', 'UsuarioController::getDataGrid/$1');
		// BackendCall (Chamadas assincrona)
		$routes->post('backendCall/(:alphanum)', 'UsuarioController::backendCall/$1');
		// Funcionalidades
		$routes->post('store', 'UsuarioController::store');
		$routes->post('update/(:num)', 'UsuarioController::update/$1');
		// Select2
		$routes->get('selectUsuario', 'UsuarioController::selectUsuario');
	});

	/**
	 * --------------------------------------------------------------------
	 * Grupo
	 * --------------------------------------------------------------------
	 */
	$routes->group('grupo', function ($routes) {
		// Páginas
		$routes->get('/', 'GrupoController::index');
		$routes->get('adicionar', 'GrupoController::create');
		$routes->get('alterar/(:num)', 'GrupoController::edit/$1');
		// DataGrid
		$routes->post('getDataGrid/(:alphanum)', 'GrupoController::getDataGrid/$1');
		// BackendCall (Chamadas assincrona)
		$routes->post('backendCall/(:alphanum)', 'GrupoController::backendCall/$1');
		// Funcionalidades
		$routes->post('store', 'GrupoController::store');
		$routes->post('update/(:num)', 'GrupoController::update/$1');
	});

	/**
	 * --------------------------------------------------------------------
	 * Menu
	 * --------------------------------------------------------------------
	 */
	$routes->group('menu', function ($routes) {
		// Páginas
		$routes->get('/', 'MenuController::index');
		$routes->get('adicionar', 'MenuController::create');
		$routes->get('alterar/(:num)', 'MenuController::edit/$1');
		// DataGrid
		$routes->post('getDataGrid/(:alphanum)', 'MenuController::getDataGrid/$1');
		// BackendCall (Chamadas assincrona)
		$routes->post('backendCall/(:alphanum)', 'MenuController::backendCall/$1');
		// Funcionalidades
		$routes->post('store', 'MenuController::store');
		$routes->post('update/(:num)', 'MenuController::update/$1');
	});

	/**
	 * --------------------------------------------------------------------
	 * Medicion - Empresa
	 * --------------------------------------------------------------------
	 */
	$routes->group('empresa', function ($routes) {
		// Páginas
		$routes->get('/', 'Assinale\EmpresaController::index');
		$routes->get('alterar/(:num)', 'Assinale\EmpresaController::edit/$1');
		// Funcionalidades
		$routes->post('update/(:num)', 'Assinale\EmpresaController::update/$1');
		//select2
		$routes->get('selectEmpresa', 'Assinale\EmpresaController::selectEmpresa');
	});
});

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
