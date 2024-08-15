<?php
	include ("Config.php");
	echo "<link href='C:\wamp64\www\web project\men.css' type='text/css' rel='stylesheet' />";
	
	$sql = "insert into signup (Name, Email, passworld, cno) values ('$_POST[user_name]','$_POST[user_email]','$_POST[user_password]','$_POST[user_number]') ";
	
	if (! mysqli_query($con, $sql))
	{
		echo "Error ".mysqli_error($con);
	}
	else 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['user_name']) || empty($_POST['user_email']) || empty($_POST['user_password']) || empty($_POST['user_number'])) {
        echo '<font color="red"><h1> Enter Data Field </h1></font>';
        header("Location: signup.html?");
    }
   
        else{
          if (mysqli_query($con,$sql)) {
            header("Location: login.html");
          }
        }

       
  }
  
?>