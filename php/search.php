

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SEARCH</title>
<meta charset="utf-8">
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="style.css"> 

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
    <div class="navbar-header">
    <ul class="nav navbar-nav">
      <li ><a href ="index.php">HOME</a></li>
      <li ><a href="gt.php">GENERATE-TICKET</a></li>
      <li><a  href="search.php">SEARCH</a></li>
    </ul>
  </div>
  </div>
</nav>

<div class="container">
    <br/>
    <form action = "search.php" method="post">
  <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <!-- <i class="fas fa-search h4 text-body"></i> -->
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search Ticket"  name="search">
                                    </div>
                                    <!--end of col-->
                                    <br>
                                    <div class="col-auto" align="center">
                                        <button class="btn btn-lg btn-primary" type="submit">Search</button>
                                        <br>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>

</div>
<?php 

            include ("db.php");

            // $output = '';
            if(isset($_POST['search'])){
              $searchq = $_POST['search'];
               $searchq = preg_replace("#[^0-9a-z]#i","", $searchq);

              $query = mysqli_query($db,"SELECT * FROM ticket WHERE ticket_id  = '$searchq' ");
             
              $count = mysqli_num_rows($query);
              if ($count == 0) {
                  
                   echo 'NO SEARCH RESULTS';
                  
                }
              else{
                      while($row = mysqli_fetch_array($query))
                      {

                        echo "<table>";
                    echo "<tr>";
                    echo "<th>TICKET ID</th>"; 
                    echo "<th>NAME</th>";
                    echo "<th>EMAIL</th>";
                    echo "<th>PRIORITY</th>";
                    echo "<th>SUBJECT</th>";
                    echo "<th>MESSAGE</th>";   
                    echo "</tr>";  
                 
                        
                        // $output .= '<div> '.$ticket.' '.$name.' '.$email.' '.$pri.' '.$sub.' '.$mess.'</div>';

                       echo "<tr>"; 
                              echo "<td>" . $row["ticket_id"] . "</td>"; 
                              echo "<td>" . $row["name"] . "</td>";
                              echo "<td>" . $row["email"] . "</td>";
                              echo "<td>" . $row["priority"] . "</td>";
                              echo "<td>" . $row["subject"] . "</td>";
                              echo "<td>" . $row["message"] . "</td>";
                        echo "</tr>"; 
                      }

                    echo"</table>";
              }
        }
          
   

?>

 
</body>
</html> 