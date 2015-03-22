<?php

namespace Controllers\Login;
use Mpwarfwk\Component\Controllers\BaseController;
use Mpwarfwk\Component\Request\Request;
use Mpwarfwk\Component\Response\Response;
use Mpwarfwk\Component\Templating\Templating;
use Mpwarfwk\Component\Templating\SmartyTemplate;
use Mpwarfwk\Component\Templating\TwigTemplate;

class Login extends BaseController{


	public function __construct(){

		parent::__construct();
		$this->connection 	= $this->container->get("PDO");
	}

	public function ActionMain(Request $request){


	    $query = "SELECT * FROM users WHERE user = :user AND pass = :password";

	    if(@$request->_post->user && @$request->_post->password){
	 	    $login = array('user' => $request->_post->user , 'password' => $request->_post->password);
		    $checkUserCredentials = $this->connection->selectFromTable($query, $login);

		    if($checkUserCredentials){
	 			$request->session->setValue("user", $checkUserCredentials[0]["user"] );
	 			header('Location: /home');
		    }   	

 			$arrayName 	= array('fail' => true);

			$view 	= 	$this->container->get("TwigTemplate");
			return new Response($view->render( "Login/homeTwig.twig", $arrayName ), 200);
	    }


 		if(@$request->session->getValue("user")){

 			$arrayName 	= array('user' => $request->session->getValue("user"));

			$view 	= 	$this->container->get("TwigTemplate");
			return new Response($view->render( "Login/homeTwig.twig", $arrayName ), 200);
 		}
 	
	}
}

