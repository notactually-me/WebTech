<?php
	$x = [[1 , 2, 3 , 'A'],[1 , 2 , 'B', 'C' ],[1, 'D', 'E', 'F' ]];
	
	for ($row = 0; $row < 4; $row++) 
	{
	  for ($col = 0; $col < 4; $col++) 
	  {
		echo $x[$row][$col];
	  }
	  echo "<br>";
	}
?>