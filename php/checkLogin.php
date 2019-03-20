<?php
	session_start();
	include("db_connect.php");
	$db=new DB_connect();
	$con=$db->connect();
	
	$username=$_POST["username"];
	$password=$_POST["password"];
	$_SESSION["username"]="";
	$_SESSION["password"]="";
	
	$count=0;
	$qry="select count(*) from login where username='".$username."' and password='".$password."'";
	//echo $qry;
	$result=mysqli_query($con,$qry);
	$row=mysqli_fetch_array($result);
	
	if($row[0]>0){
		$_SESSION["username"]=$username;
		$_SESSION["password"]=$password;
		echo "success";
		header("Location: ../home.php");
	}
	else{
		echo "failed";
		header("Location: ../index.php");
	}
?>