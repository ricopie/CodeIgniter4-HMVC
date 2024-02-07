<?php

namespace AppModules\Welcome\Controllers;

use App\Core\BaseController;

class Welcome extends BaseController
{
	public function index(): string
	{
		return view('AppModules\Welcome\Views\hmvc_welcome_message');
	}
}