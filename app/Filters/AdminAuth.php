<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

use Ouzo\Utilities\Arrays;

class AdminAuth implements FilterInterface
{
	public function before(RequestInterface $request, $arguments = null)
	{
		$externas = [
			"/admin/sesion",
			"/admin/sesion/",
			"/admin/sesion/ingresar"
		];
		$ruta = "/{$request->uri->getPath()}";

		$esExterna = Arrays::contains($externas, $ruta);
		// var_dump($esExterna);
		// var_dump(!session()->has('usuario'));
		// var_dump(!$esExterna && !session()->has('usuario'));
		// exit();

		if (!$esExterna && !session()->has('usuario')) {
			return redirect()->to('admin/sesion');
			// echo "cambio";
		}
	}

	//--------------------------------------------------------------------

	public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
	{
		// Nada
	}
}
