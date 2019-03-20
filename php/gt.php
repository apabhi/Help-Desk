<?php 

include ("db.php"); 
$flag = 0;

$ticket_id = uniqid();


if(isset($_POST['submit']))
{
   
 $res = mysqli_query($db,"insert into ticket(ticket_id, name, email, priority, subject, message)values('$ticket_id','$_POST[name]','$_POST[email]','$_POST[priority]','$_POST[subject]','$_POST[message]')");

	if ($res)

	{
		$flag = 1;
	}

}	

  


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>TICKET-GENERATION</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	
  	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
		<nav class="navbar navbar-inverse">
  			<div class="container-fluid">
   			 <div class="navbar-header"></div>
    			<ul class="nav navbar-nav">
      				<li> <a href ="index.php">HOME</a></li>
              <li ><a href="gt.php">GENERATE-TICKET</a></li>
      <li>  <a  href="search.php">SEARCH</a></li>
      			</ul>
      		</div>
      	</nav>


		<?php 

				echo " <p> USE THIS FORM TO SUBMIT A REQUEST. <b> ALL THE FIELDS ARE TO BE FILLED </b> </p>";

		?>

		<div class="container">
    	<div class="panel panel-default ">
    		<?php if($flag){ ?>
    			<div class = "alert alert-success">
    				   <h4><strong>Success!</strong>Data Sucessfully Added!</h4>
               <script></script>
    				   <?php
    				   			echo " YOUR TICKET ID IS : $ticket_id";
						    ?>
    			</div>
    		
    		<?php }?>		

    	<div class="panel-body">		
		<form action = "gt.php" method="post">

		<div class="form-group" >
		<label for="name">NAME:</label>
  			<input type="text" class="form-control" id="usr" name="name" pattern="[A-Za-z]{0,}" placeholder="Enter Name" required>
		</div>
		<div class="form-group">
 			 <label for="email">EMAIL:</label>
  			<input type="email" class="form-control" id="pwd" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 3}$" placeholder="Enter Email" required>
		</div>
		
		<div class="form-group">
  			<label for="pri">PRIORITY:</label>
  			<select class="form-control" id="pri" name="priority">
    			<option id="low" name="low">LOW</option>
   			 	<option id="medium" name="medium">MEDIUM</option>
    			<option id="high" name="high">HIGH</option>
  			</select>
		</div>
		
		<div class="form-group">
  			<label for="sub">SUBJECT:</label>
  			<input type="text" class="form-control" id="usr" name="subject" placeholder="Enter Subject" required>
  		</div>
  		<div class="form-group">
  			<label for="comment">MESSAGE:</label>
  			<textarea class="form-control" rows="5" id="comment" name="message" placeholder="Enter Message" required></textarea>
		</div>
		
		<div class="text-center">		
			<button type="submit" class="btn btn-primary btn-md" name="submit" id = "submit" align="middle">SUBMIT</button>
		</div>
	</div>
</form>
</div>
</div>

<script>  
  
            
  
</script>


</body>
</html>