<?php
	
echo "Odd numbers from 10 - 100: <br>"; 

	for($i = 10 ; $i <= 100 ; $i++)
	{
		if ($i % 2 != 0)
		{
			echo $i, "<br>";
		}
	}

?>