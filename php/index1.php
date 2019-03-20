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
    </div>
  </nav>
  <div class="jumbotron jumbotron-fluid text-center">
    <div class="container"><h1>Ranking System</h1></div>
  </div>
  <form action="PHP Files/checkLogin.php" method="post" class="fScroll">
    <fieldset>
      <div class="container">
      <legend><h2>Admin Login</h2></legend>
        Username:<br>
          <input type="text" class="ip" name="username" maxlength="20" placeholder="Username" autocomplete="off" required="required"><br>
        Password:<br>
          <input type="password" class="ip" id="pass" name="password" maxlength="20" placeholder="Password" required="required"><br>
          <input type="checkbox" onclick="myFunction()"> Show Password
        <hr>
        <input type="submit" value="Login" class="btn btn-default" onclick="addLoginDetails()">
      </div>
    </fieldset>
  </form>
  <script>
    function myFunction() {
      var x = document.getElementById("pass");
      if (x.type === "password") {
          x.type = "text";
        } 
      else {
        x.type = "password";
      }
    }
    // function addLoginDetails(){
    //   if($("#txtUsername").val()==""){
    //     alert("Please enter username");
    //   }
    //   else if($("#txtPassword").val()==""){
    //     alert("Please enter password");
    //   }
    //   else{
    //     $.ajax({
    //       type:"POST",
    //       url:"checkLogin.php",
    //       data:{username:$("#txtUsername").val(),password:$("#txtPassword").val()},
    //       success:function(response){
    //         console.log(response);
    //         if(response=="success"){
    //           alert("Login successful");
    //           $(location).attr('href', 'home.php');
    //           //window.location.href="home.php";
    //   }
    //   else{
    //     alert("Login failed");
    //   }
    // }
    // });
    // }
    // }
  </script>
  <footer class="text-center">
    <p>&copy; TD</p>
  </footer>
</body>
</html>