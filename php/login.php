<!DOCTYPE html>
<html lang="en">
<head>
	<title>LOGIN</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  	<link rel="stylesheet" type="text/css" href="style1.css">

</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header"></div>
    <ul class="nav navbar-nav">
      <li ><a href ="index.php">HOME</a></li>
      <li ><a href="gt.php">GENERATE-TICKET</a></li>
      <!-- <li ><a href="about.php">ABOUT</a></li> -->
    </ul>
</div>
</nav>
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-body">
				<form action="login.php" method="post">
					<div class="form-group">
						<label for="name"><span class ="glyphicon glyphicon-user"></span>USERNAME:</label>
						<input type="text" name="usr" class="form-control" placeholder="Enter Username" required>
					</div>
					<div class="form-group">
						<label for="password"><span class="glyphicon glyphicon-asterisk"></span>PASSWORD:</label>
						<input type="password" name="pswrd" class="form-control" placeholder= "Enter Password" required>
					</div>

					<div class="text-center">		
						<button type="submit" onclick="check(this.form)" value="Login" class="btn btn-primary btn-md">Login</button>
						<button type="submit" class="btn btn-primary btn-md">Cancel</button>
						<br>
						<br>
					</div>
				</form>
				<script src="login.js"></script>
			</div>
		</div>
	</div>



</body>
</html>