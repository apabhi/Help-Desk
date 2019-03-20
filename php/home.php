<?php   
  session_start();  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ranking System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#">RS</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="home.php">Home</a></li>
          <li><a href="rankings.php">Rankings</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Records
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="record.php">Add a Record</a></li>
              <li><a href="update.php">Update a Record</a></li>
                <li><a href="prize.php">Add Prizes</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="PHP Files/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="jumbotron jumbotron-fluid text-center">
    <div class="container"><h1>Ranking System</h1></div>
  </div>
  <fieldset class="fScroll">
    <div class="container">
      <legend><h2>About us</h2></legend>
        <p><h3><center>This is a Project Created by 3rd Year IT Students. It can be used to give Prizes based on the Rankings of the Students. Rankings are calculated based on the Marks of the Students along with many more Criterias like College, Year, etc.</center></h3></p>
      <legend><h2>Contact us</h2></legend>
        <a href="#"><img src="Images/facebook.png" alt="Facebook Icon" width="20" height="20"><h4>Facebook</h4></a>
        <a href="#"><img src="Images/instagram.png" alt="Instagram Icon" width="20" height="20"><h4>Instagram</h4></a>
        <a href="#"><img src="Images/twitter.png" alt="Twitter Icon" width="20" height="20"><h4>Twitter</h4></a>
    </div>
  </fieldset>
  <footer class="text-center">
    <p>&copy; Hardik</p>
  </footer>
</body>
</html>