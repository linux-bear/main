
<?PHP
$mydatabase='BearBase';
$username='fozzie';
$password='bearsAreGreat0^';
$hostname = 'localhost';  
$mytable ='BearTable';
  // form handler
  if($_POST && isset($_POST['submit'], $_POST['urname'], $_POST['email'], $_POST['company'], $_POST['comments'])) {

    $urname = $_POST['urname'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $comments = $_POST['comments'];


  $dbhandle = mysqli_connect( $hostname, $username, $password, $mydatabase) or die( "Unable to connect to MySQL");

  $sql = "INSERT INTO $mytable (urname, email, company, comments) VALUES ('$urname','$email','$company','$comments')";
 
  if(mysqli_query($dbhandle, $sql))
  {
      print_r( "Yo it worked, dude!");
    
  }
  else
  {
      print_r("It's all bollocks!");
  }
   //  or die("It's all gone tits up: ".mysqli_error($dbhandle));


mysqli_close($dbhandle);
  }

?>



<html>
<body>


</body>
</html>


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

    <title>Linuxbear</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="linuxbear.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Linux Bear</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="Linuxbear_home.html">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
        <h1>BearBase</h1>
        <p class="lead">Please record any comments you have in the form below</p>
      </div>

    <div>
    <form method="POST" action="bootstrap_navbar_mine_landing.php" accept-charset="UTF-8">
  <p><label>Your Name<strong>*</strong><br>
  <input type="text" size="48" name="urname" value="<?PHP if(isset($_POST['urname'])) echo htmlspecialchars($_POST['urname']); ?>"></label></p>
    <p><label>Email Address<strong>*</strong><br>
    <input type="email" size="48" name="email" value="<?PHP if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>"></label></p>
    <p><label>Company<br>
    <input type="text" size="48" name="company" value="<?PHP if(isset($_POST['company'])) echo htmlspecialchars($_POST['company']); ?>"></label></p>
    <p><label>Comments<strong>*</strong><br>
      <textarea name="comments" cols="48" rows="8"><?PHP if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?></textarea></label></p>
    <p><input type="submit" name="submit" value="Send Message"></p>
    </form>
    
    </div>



    

      

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

