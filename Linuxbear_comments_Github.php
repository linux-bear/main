
<?PHP
$mydatabase='BearBase';
$username='Fozzie';
$password='Password123';
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
      print_r( "It worked!!!!");
    
  }
  else
  {
      print_r("Arrrrrgh!" .mysqli_error($dbhandle));
  }



mysqli_close($dbhandle);
  }

?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Linux Bear</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="linuxbear.css" rel="stylesheet">

  <style>
    .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: #2E2E2E;
      color: white;
      text-align: center;
    }
    </style>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">Linux Bear</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">



          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="AboutMe.html">About Me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="DeveloperSkills.html">Developr Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Databases.html">Databases</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Linux.html">Linux</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="comments.html">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="jumbotron">
      <h1>BearBase</h1>
      <p> Please record any comments you have in the form below </p>
    </div>
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



    


    <section>
  <div>
    <h2> <br>  </h2>
  </div>
</section>


   
   <div class="footer">
     <p>© 2020 Copyright: Helen Barrett</p>
   </div>
   
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

