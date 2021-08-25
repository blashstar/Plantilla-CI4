<?php

namespace App\Controllers;

use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use Ouzo\Utilities\Arrays;
use Ouzo\Utilities\Strings;

/**
 * Class BaseController
 *
 * Controller que devuelve una respuesta html
 *
 */

class HtmlController extends BaseController
{
	/**
	 * Instance of the main Request object.
	 *
	 * @var IncomingRequest|CLIRequest
	 */
	protected $request;

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */

	protected $helpers = ['url', 'form'];

	/**
	 * @var string
	 */
	protected $titulo = "";

	/**
	 * @var string
	 */
	protected $vistas = "";

	/**
	 * @var array
	 */
	protected $datos = [];

	/**
	 * @var array
	 */
	protected $clases = [];

	/**
	 * @var array
	 */
	protected $css = [];

	/**
	 * @var array
	 */
	protected $configJs = [];

	/**
	 * @var array
	 */
	protected $js = [];

	/**
	 * Atributos que van a la vista
	 */
	protected $aplicacion;
	protected $router;
	protected $pagina;
	protected $session;

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

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------

		// print_r($request);
		// exit();

		$this->aplicacion = config("Aplicacion");
		$this->router = service('router');
		$routes = service('routes');

		$defaultNamespace = $routes->getDefaultNamespace();
		$defaultController = $routes->getDefaultController();
		$defaultMethod = $routes->getDefaultMethod();

		$controller = Strings::removePrefix($this->router->controllerName(), "\\$defaultNamespace");
		$ruta = explode("/", $request->uri->getPath());
		$metodo = $this->router->methodName();
		$modulo = Arrays::first($ruta);
		$controlador = strtolower(Arrays::last(explode("\\", $controller)));
		$titulo = ucwords($metodo != $defaultMethod ? $metodo : $controlador);

		$this->aplicacion->titulo = ucwords(join(" | ", array_reverse($ruta))) . " | " . $this->aplicacion->titulo;

		$defaults = [
			$modulo,
			strtolower($defaultNamespace),
			strtolower($defaultController),
			strtolower($defaultMethod)
		];
		$titular = array_diff($ruta, $defaults);


		$this->pagina = new \stdClass();
		$this->pagina->id = join("_", $ruta);
		$this->pagina->ruta = $ruta;
		$this->pagina->router = $request->uri->getPath();
		$this->pagina->modulo = $modulo;
		$this->pagina->titular = ucwords(join(" - ", $titular));
		$this->pagina->clase = $controller;
		$this->pagina->controlador = $controlador;
		$this->pagina->actual = $metodo;
		$this->pagina->titulo = $titulo;

		$this->vistas = str_replace("\\", "/", strtolower($controller));

		$this->_setCss();
		$this->_setConfigJs();
		$this->_setJs();
		$this->_setClases();
	}

	protected function _setCss(): void
	{
		$this->css = [];
	}

	protected function _setClases(): void
	{
		$this->clases = array_unique(
			Arrays::flatten([
				Arrays::map(
					$this->pagina->ruta,
					function ($valor) {
						return strtolower($valor);
					}
				),
				$this->pagina->actual
			])
		);
	}


	protected function _setConfigJs(): void
	{
		$this->configJs = [];
	}

	protected function _setJs(): void
	{
		$this->js = [];
	}


	protected function _vista(string $vista = null, string $carpeta = null): string
	{
		$this->datos["aplicacion"] = $this->aplicacion;
		$this->datos["router"] = $this->router;
		$this->datos["pagina"] = $this->pagina;
		$this->datos["css"] = $this->css;
		$this->datos["configJs"] = $this->configJs;
		$this->datos["js"] = $this->js;
		$this->datos["clases"] = $this->clases;

		$carpeta = trim($carpeta) ?: $this->vistas;
		$vista = trim($vista) ?: $this->pagina->actual;

		return view("$carpeta/$vista", $this->datos);
	}

	protected function _render($vista = null): void
	{
		echo $this->_vista($vista);
	}
	protected function render($vista = null): string
	{
		return $this->_vista($vista);
	}

	public function __call($method, $args)
	{
		print_r($method);
		print_r($args);
	}
}
