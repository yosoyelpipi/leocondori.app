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
  .loading{
  		   display: none;
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
            
            <form role="form" method="POST" action="http://www.mascotasvqr.com/mejoras/leo/test.php" id="fo3" name="fo3">
         		<div id="result">
            		<p class="lead">
            		<input type="hidden" name="leermas" id="leermas" value="yes">
              		<button type="submit" class="btn btn-lg btn-default">Leer más sobre mí...</button>
            		</p>
            	</div>
            </form>
          </div>

          <div id="loading" class="loading">
          <p>Cargando...</p>
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

    <script language="javascript" src="js/jquery-1.3.min.js"></script>

    <script language="javascript">
      $(document).ready(function() {
       $().ajaxStart(function() {
        $('#loading').show();
        $('#result').hide();
        }).ajaxStop(function() {
        $('#loading').hide();
        $('#result').fadeIn('slow');
        });
      $('#form, #fat, #fo3').submit(function() {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
                $('#result').html(data);

            }
        })  
        return false;
         }); 
        })  
    </script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>