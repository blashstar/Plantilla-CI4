<?php

namespace App\Controllers\Web;

use App\Models\UsuarioModel;

use Ouzo\Utilities\Strings;

class Pagina extends BaseController
{
	public function index($s = "nada")
	{
		echo "///" . $s;
	}
	public function algo()
	{
		echo "///algo";
	}
}
