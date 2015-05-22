<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script type="text/javascript" src="mespeak.js"></script>
    <script type="text/javascript">
        meSpeak.loadConfig("mespeak_config.json");
        meSpeak.loadVoice("voices/es-la.json");
    </script>
    
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="speech-input.css">

        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Lista</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
         <form enctype="multipart/form-data" action='insertar.php' method='POST'>

         
  <div class="si-wrapper">
	<input type="text" class="si-input"  name="texto" placeholder="What's up?">
	<button class="si-btn">
		<span class="si-mic"></span>
		<span class="si-holder"></span>
	</button>
</div>
<!--
              <div  class="col-md-4">
              <input type="text" placeholder="Texto" name="texto" class="form-control">             
              </div>-->
                      <div  class="col-md-4">
                      <button type="submit" name="enviar" class="btn btn-danger">Listar</button>
                      </div>
          </form>
    </div>
    <div class="container">
      <div class="row">

        <div class="col-md-4">
  
  </div>
        <div class="col-md-4">
          <?php
          include("conectar.php");
          $con=conectar();
      
          $sql = "Select * from elementos";
          $resulT = mysql_query($sql);
          ?>     
          <table class="table table-hover">
          <tr>
          <th width=10%>Codigo</th>
          <th width=10%>Texto</th>
          <th width=10%>Eliminar</th>
          </tr>
          <?php
          While($row=mysql_fetch_array($resulT))
          {?>
            <tr>
              <td><?php echo $row['id'];?>
              </td>
              <td>
              <script>
              function getVoice<?php echo $row['id'];?>()
            {
              var x=document.getElementById(<?php echo $row['id'];?>).innerHTML;
              meSpeak.speak(x , { voice: 'es-la', variant:'f4', wordgap: 3 })
            }
              </script>
                <div id=<?php echo $row['id'];?>>
                <?php echo $row['nombre'];?>
                </div>
                <button onclick="getVoice<?php echo $row['id'];?>()">Hablar
                </button>
                <div id="audio"></div>
              </td>
              <td>
                <a href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a>
              </td>
            </tr>
          <?php } ?>
          </table>
        </div>
        <div class="col-md-4">

        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Audinotes 2015</p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="speech-input.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
