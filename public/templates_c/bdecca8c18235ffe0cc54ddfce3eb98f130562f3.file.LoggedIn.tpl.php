<?php /* Smarty version Smarty-3.1-DEV, created on 2015-03-22 20:56:51
         compiled from "../src/Templates/Home/LoggedIn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1009182750550f1e8372be35-76100135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdecca8c18235ffe0cc54ddfce3eb98f130562f3' => 
    array (
      0 => '../src/Templates/Home/LoggedIn.tpl',
      1 => 1427054189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1009182750550f1e8372be35-76100135',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_550f1e839ba214_16602532',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550f1e839ba214_16602532')) {function content_550f1e839ba214_16602532($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>STANLEY - Free Bootstrap Theme </title>

    <!-- Bootstrap core CSS -->
    <link href="../app/css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="../app/css/main.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../app/js/hover.zoom.js"></script>
    <script src="../app/js/hover.zoom.conf.js"></script>
  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">I'm MPWARFWK, Test me!</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/documentation">Documentation</a></li>
            <li><a href="/home">Twig Template</a></li>
            <li><a href="/home/smarty">Smarty Template</a></li>
            <li><a href="/logout">Log out</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<!-- +++++ Welcome Section +++++ -->
	<div id="ww">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 centered">
					<img src="../app/img/user.png" alt="Stanley">
					<h1>You are <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
 !</h1>
					<p>Hello everybody. You are in my <strong>Smarty</strong> Home Template</p>
				  
          <h2>How to use?</h2>
          <p>
            Tip on your Controller

            <div>
            <code>
            $view   =   $this->container->get("SmartyTemplate");
            <code>
            </div>
              return new Response($view->render( template_path, $arrayVars ), http_response);
            </code>
          </p>
				</div><!-- /col-lg-8 -->
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /ww -->
	
	
  </body>
</html>
<?php }} ?>