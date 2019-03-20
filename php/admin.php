<!DOCTYPE html>
<html lang="en">
<head>
	<title>ADMIN</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
	<style>
			table{
    					font-family: arial, sans-serif;
    					border-collapse: collapse;
    					width: 100%;
    			}

			td, th {
  						border: 1px solid;
    					text-align: center;
    					padding: 8px;
    					border-color: #0d47a1;

					}
			tr:nth-child(even) {
    					background-color: #0d47a1;
    					color: white;

						}

			.navbar{
            background-color: #0d47a1;
        			  }
  			
  			.navbar-inverse .navbar-nav li>a{
            color: white;
          			}	
	</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- <div class="navbar-header">   -->
    		<ul class="nav navbar-nav navbar-right">
                <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
    		</ul>
 		 <!-- </div> -->
	</div>
 </nav>
 <div class="container">
<?php 

	include ("db.php");
?>

<?php
	
	$sql = "SELECT * FROM ticket";

	if($res = mysqli_query($db, $sql)){
		if(mysqli_num_rows($res)>0) {

		echo "<table>";
			echo "<tr>";
	 			echo "<th>TICKET ID</th>"; 
        		echo "<th>NAME</th>";
        		echo "<th>EMAIL</th>";
        		echo "<th>PRIORITY</th>";
        		echo "<th>SUBJECT</th>";
        		echo "<th>MESSAGE</th>";
        		echo "<th>ID</th>"; 	
        	echo "</tr>";  
		while ($row = mysqli_fetch_array($res)) {
			echo "<tr>"; 
				echo "<td>" . $row["ticket_id"] . "</td>"; 
				echo "<td>" . $row["name"] . "</td>";
				echo "<td>" . $row["email"] . "</td>";
				echo "<td>" . $row["priority"] . "</td>";
				echo "<td>" . $row["subject"] . "</td>";
				echo "<td>" . $row["message"] . "</td>";
				echo "<td>" . $row["id"] . "</td>";
			echo "</tr>"; 
		} 	

		echo "</table>";
		mysqli_free_result($res);
	}

	else
	
	{
		echo "No matching records were found.";
	}
}
else
{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}

	mysqli_close($db);
?>

</div>
</body>
</html>