<?php
	include ("Config.php");
	
	
	$sql = "insert into pay (street,city,zipcode,email,fn,ln,cnu,ccv,pcode,conu) values ('$_POST[streetaddress]','$_POST[city]','$_POST[zipcode]','$_POST[email]','$_POST[fn]','$_POST[ln]','$_POST[number]','$_POST[cvc]','$_POST[productcode]','$_POST[contactnumber]')";
	
	if (! mysqli_query($con, $sql))
	{
		echo "Error ".mysqli_error($con);
	}
	else 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['streetaddress']) || empty($_POST['email']) || empty($_POST['number']) || empty($_POST['cvc'])) {
        echo '<font color="red"><h1> Enter Data Field </h1></font>';
        header("Location: buy.html?");
    }
   
        else{
          if (mysqli_query($con,$sql)) {
            header("Location: home.html");
          }
        }

       
  }
  
?>