<?php

use Mpwarfwk\Component\Bootstrap;
use Mpwarfwk\Component\Request\Request;
use Mpwarfwk\Component\Session\Session;

require_once("../vendor/autoload.php");

$framework 	= new Bootstrap('dev', true);

$Request = new Request(new Session);

$view = $framework->execute($Request);

$view->send();