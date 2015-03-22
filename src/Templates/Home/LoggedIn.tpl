<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MPWARFWK - Jaume Mulé </title>

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
					<h1>You are {$user} !</h1>
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
