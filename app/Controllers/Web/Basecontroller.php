<?php

namespace App\Controllers\Web;

use App\Controllers\HtmlController as Base;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use GroceryCrud\Core\GroceryCrud;

use Ouzo\Utilities\Arrays;
use Ouzo\Utilities\Strings;

class BaseController extends Base
{

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
	}
}
