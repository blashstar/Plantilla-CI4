<?php

namespace App\Controllers\Admin;

use App\Controllers\Admin\BaseController;
use App\Models\UsuarioModel;

class Sesion extends BaseController
{
	public function index()
	{
		if ($this->sesion->usuario) {
			return redirect()->to('/admin/home');
		}


		if ($this->request->getMethod() == "post") {

			$alias = $this->request->getVar('usuario');
			$clave = $this->request->getVar('clave');

			$usuario = @$this->config->superUsuarios[$alias];
			if ($usuario && $usuario["clave"] == $clave) {

				$this->sesion->set("usuario", $usuario);
				return redirect()->to('/admin/home');
			} else {
				$this->sesion->setFlashdata('mensaje', 'Usuario y/o Contraseña incorrectos');
			}


			// $usuario = UsuarioModel::validar($alias, $clave);

			// if ($usuario) {
			// 	$this->session->set("usuario", $usuario);
			// 	return redirect()->to('/admin/home');
			// } else {
			// 	$this->session->setFlashdata('msg', 'Usuario y/o Contraseña incorrectos');
			// }


		}

		return $this->_render();
	}

	public function cerrar()
	{
		$this->sesion->set("usuario", null);
		// print_r($this->session);
		return redirect()->to('/admin/sesion');
	}
}
