<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

/**
 * Author: Joffré Sánchez
 */


class Admin extends BaseConfig
{
	public $superUsuarios = [
		"jchipulina" => [
			"nombre" => "Josemanuel",
			"clave" => "macromedia",
			"perfil" => "superUsuario"
		],
		"jsanchez" => [
			"nombre" => "Joffre",
			"clave" => "124578",
			"perfil" => "superUsuario"
		]
	];
}
