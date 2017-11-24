
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Welcome</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/footer.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
html {
    position: relative;
    min-height: 100%;
  }
  body {
    /* Margin bottom by footer height */
    margin-bottom: 60px;
  }

.starter-template {
  padding: 40px 15px;
  text-align: center;
}

.btn-group > .stop_sync:hover{
    color:black;
    background-color:#c95143;

}

.btn-group > .homepage:hover{
    color:black;
    background-color:#7294d3;

}
</style>
  </head>
  <body>
  <?php
  session_start();

  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']== false){
      header("Location: login.php");
  }

  ?>

  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://www.wysiwyg.fr">Wysiwyg</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="welcome.php">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
        <?php if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']== true):?>
        <li><a href="profile.php">Profile</a></li>
        <?php endif; ?>

      </ul>
      <ul class="nav navbar-nav navbar-right"><li class="pull-right"><?php if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']== true):?><a href="logout.php">Logout</a></li>
      <li class="text-danger"><a href="#"><?php  echo $_SESSION['email'] ?></a></li>
<?php else: ?>
<li class="pull-right"><a href="login.php">Login</a></li>
<?php endif; ?>
</ul>

    </div><!--/.nav-collapse -->
  </div>
</nav>
 <div class="container-fluid">
 <div class="row">
 <div class="col-md-12">

 <div class="jumbotron">
      <div class="starter-template">
        <h1>Syncprod Connector  </h1>
        <?php if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']== true):  ?> <p><button type="button" name="sync" class="btn btn-success">Synchronise</button>
      <?php else: ?>
        <p class="lead">Use this document as a way to quickly start any new project.<br> </p>
        <?php endif; ?>
      </div>
      </div>
 </div>
 </div>

 <div class="row">
 <div class="col-md-push-3 col-md-6">
       <div class="btn-group btn-group-justified" role="group" aria-label="...">
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default stop_sync">Stop Synchronisation</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default homepage">Home Page</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default">Settings</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default">Help</button>
  </div>
</div>
 </div></div>

    </div><!-- /.container -->


    <footer class="footer">
      <div class="container">
        <p class="text-muted text-center">WYSIWYG</p>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
