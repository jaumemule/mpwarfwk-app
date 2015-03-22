<?php

namespace Controllers\Login;
use Mpwarfwk\Component\Controllers\BaseController;
use Mpwarfwk\Component\Request\Request;
use Mpwarfwk\Component\Response\Response;
use Mpwarfwk\Component\Templating\Templating;
use Mpwarfwk\Component\Templating\SmartyTemplate;
use Mpwarfwk\Component\Templating\TwigTemplate;

class Logout extends BaseController{


	public function __construct(){

		parent::__construct();
	}

	public function ActionMain(Request $request){

 			$request->session->destroy();

 			$arrayName 	= array('logout' => true);

			$view 	= 	$this->container->get("TwigTemplate");
			return new Response($view->render( "Login/homeTwig.twig", $arrayName ), 200);
	}
}

