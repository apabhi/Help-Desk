<!-- <?php  -->

            include ("db.php");

            $output = '';
            if(isset($_POST['search'])){
              $searchq = $_POST['search'];
               $searchq = preg_replace("#[^0-9a-z]#i","", $searchq);

              $query = mysqli_query($db,"SELECT * FROM ticket WHERE ticket_id LIKE = '$searchq'");
             
              $count = mysqli_num_rows($query);
              if ($count == 0) {
                   $output = 'NO SEARCH RESULTS';
                  
              }
              else{
                      while($row = mysqli_fetch_array($query))
                      {
                        $ticket = $row['ticket_id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $pri  = $row['priority'];
                        $sub = $row ['subject'];
                        $mess = $row['message'];
                        $id = $row['id'];

                        $output .= '<div> '.$ticket.' '.$name.' '.$email.' '.$pri.' '.$sub.' '.$mess.'</div>';
                      }
              }
        }

        

   

?>

<!-- <?php print("$output"); ?> -->