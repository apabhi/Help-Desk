<!DOCTYPE html>
<html lang= "en" >
<head>
	<title></title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

				<?php 

				
					$db = mysql_connect("localhost", "user", "password");

					if(!$db)
					{
						die("Could not connect: " . mysql_error());
					}
				

					$i = "INSERT INTO Students (Name, Class)
					 VALUES ('Rishabh','TE-IT')";

					 mysql_select_db("TicketManagement");

					 $r = mysql_query($i,$db);
					
					
					if (!$r) 
					{
						
						die("Could not insert Values: " . mysql_error());
					}

					echo "Values have been inserted";
					
				mysql_close($db);	
				?>

</body>
</html>