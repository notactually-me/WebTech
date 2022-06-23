<?php
	$x = '*';
	$n = 'A';
	for ($i = 0; $i<3; $i++)
	{
		for ($j = 0; $j <= $i ; $j++)
		{
			echo $x;
		}
		echo "<br>";
	}
	echo "<br>";
	echo "<br>";
	
	for ($i = 2; $i>=0; $i--)
	{
		for ($j = 0; $j <= $i ; $j++)
		{
			echo $j+1;
		}
		echo "<br>";
	}
	echo "<br>";
	echo "<br>";
	
	for ($i = 0; $i<3; $i++)
	{
		for ($j = 0; $j <= $i ; $j++)
		{
			echo $n++;
		}
		echo "<br>";
	}
	
?>