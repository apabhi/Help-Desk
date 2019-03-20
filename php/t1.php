<!DOCTYPE html>
<html lang = "en">
<head>
	

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title></title>
</head>

<body>


			
				<?php 

					
						$db = mysql_connect("localhost", "user", "password");

						if(!$db)
						{
							die("Could not connect: " . mysql_error());
						}
						
						$t = 'CREATE TABLE Students ( '.

							'Name varchar(20),' .
							'Class char(10))';

					mysql_select_db("TicketManagement");

					$ret = mysql_query($t,$db);
				
					if(!$ret)
					{
						die("Could not create table:" . mysql_error());
					}					

					echo "Studnets table created Successfully";


					

										
				mysql_close($db);
					
						
			?>
			

			
</body>
</html>