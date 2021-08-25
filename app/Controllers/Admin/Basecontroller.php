<?php

namespace App\Controllers\Admin;

use App\Controllers\HtmlController as Base;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use GroceryCrud\Core\GroceryCrud;

use Ouzo\Utilities\Arrays;
use Ouzo\Utilities\Strings;

class BaseController extends Base
{

	protected $sesion;
	protected $config;
	protected $usuario;

	/**
	 * Constructor.
	 *
	 * @param RequestInterface  $request
	 * @param ResponseInterface $response
	 * @param LoggerInterface   $logger
	 */
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// No editar esta linea
		parent::initController($request, $response, $logger);
		/*****************************/

		$this->config = config("Admin");

		$this->sesion = session();
		$this->usuario = session()->get("usuario");

		// $this->session->markAsFlashdata(['msg', "error"]);


	}

	protected function _vista(string $vista = null, string $carpeta = null): string
	{
		$this->datos["usuario"] = $this->usuario;

		return parent::_vista($vista, $carpeta);
	}
}
