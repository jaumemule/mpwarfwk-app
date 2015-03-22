<?php

namespace Controllers\Home;
use Mpwarfwk\Component\Controllers\BaseController;
use Mpwarfwk\Component\Request\Request;
use Mpwarfwk\Component\Response\Response;
use Mpwarfwk\Component\Templating\Templating;
use Mpwarfwk\Component\Templating\SmartyTemplate;
use Mpwarfwk\Component\Templating\TwigTemplate;

class Home extends BaseController{


	public function __construct(){

		parent::__construct();

	}

	public function ActionMain(Request $request){

		if(@$request->session->getValue("user")){
	 		$arrayName 	= array('user' => $request->session->getValue("user"));

			$view 	= 	$this->container->get("TwigTemplate");
			return new Response($view->render( "Home/LoggedIn.twig", $arrayName ), 200);
		}

		$arrayName 	= array('noSession' => true);

		$view 	= 	$this->container->get("TwigTemplate");
		return new Response($view->render( "Login/homeTwig.twig", $arrayName ), 200);
	}

}

