<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="author" content="Leo Condori">

    <title>LeoCondori.Arg</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	    #capa{
			margin: 10px auto;
			width: 400px;
		}
	</style>
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">LeoCondori.Arg</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="#">Sobre mi</a></li>
                  <li><a href="#">Portfolio</a></li>
                  <li><a href="#">Contacto</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Mi mundo</h1>
            <p class="lead">Soy periodista; programador y siempre emprendedor. Especializado en I+D. Nuevas tecnologías. Asesoramiento y consultoría.</p>
            		<p class="lead">
					  <div id="capa">
              		    <button class="btn btn-lg btn-default"><a href="#" id="botonGoogle">Leer más sobre mí...</a></button>
              		     <button class="btn btn-lg btn-default"><a href="#" id="botonMS">Test</a></button>
	                  </div>
		<!--<a href="#" id="botonMS">Microsoft</a>
		<a href="#" id="botonGoogle">Google</a>
		<a href="#" id="botonApple">Apple</a>
		-->
            		</p>				

          </div>


          <div class="mastfoot">
            <div class="inner">
              <p>App desarrollada para <a href="http://getbootstrap.com">Google Play</a>, por <a href="https://twitter.com/mdo">@leocondori</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script>
			$(document).on("ready", main);			
			function cargarNota(url){
				$("#capa").text("Cangando...");
				$("#capa").load(url);
			}
			function main(){
				$("#botonMS").on("click", function(){
				cargarNota("http://mascotasvqr.com/mejoras/leo/test.php");
				});				
				$("#botonApple").on("click", function(){
				cargarNota("https://dl.dropboxusercontent.com/u/43775522/tutoriales/ajax/apple.html");
				});
				$("#botonGoogle").on("click", function(){
				cargarNota("https://dl.dropboxusercontent.com/u/43775522/tutoriales/ajax/google.html");
				});
			}
	</script>	
  
  </body>
</html>