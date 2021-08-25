<?php

namespace App\Controllers\Admin;

use App\Controllers\Admin\BaseController;
use App\Models\UsuarioModel;

use Ouzo\Utilities\Strings;

class Home extends BaseController
{
	public function index()
	{
		return $this->render();
	}
}
