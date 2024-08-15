<?php

	include("Config.php");
	
	$B = mysqli_query ($con, 'Select * from signup');
	
	echo "<table border='1'>";
	echo "<tr> <th> username </th> <th> number </th> </tr>";
	while( $res = mysqli_fetch_array($B))
	{
		echo "<tr>";
		echo '<td>'.$res['Name'].'</td>';
		echo '<td>'.$res['cno'].'</td>';
		//echo $res['Name'].' '.$res['cno'].'<br/>';
		echo "</tr>";
	}
	echo "</table>";
	
	
?>