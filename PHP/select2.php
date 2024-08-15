<?php

	include("Config.php");
	
	$B = mysqli_query ($con, 'select * from pay');
	
	echo "<table border='1'>";
	echo "<tr> <th> fn </th> <th> ln </th> <th> street </th> </tr>";
	while( $res = mysqli_fetch_array($B))
	{
		echo "<tr>";
		echo '<td>'.$res['fn'].'</td>';
		echo '<td>'.$res['ln'].'</td>';
		echo '<td>'.$res['street'].'</td>';
		
		echo "</tr>";
	}
	echo "</table>";
	
	
?>