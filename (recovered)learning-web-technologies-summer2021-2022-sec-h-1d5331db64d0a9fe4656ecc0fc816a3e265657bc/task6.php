<?php
	
	$a = [2,1,4,6];
	$s = 6;
	$bool = false;
	
	echo "The array is: [ ";
	
	for($i = 0; $i < count($a); $i++)
	{
		echo $a[$i], " ";
	}
	echo " ] <br>";
	
	echo "Element to be searched: ", $s;
	
	for($i = 0; $i < count($a); $i++)
	{
		if ($a[$i] == $s)
		{
			echo "<br>", $s, " was found on the ", $i, " index of the array.";
			$bool = true;
		}
		
	}
	if($bool == false)
			echo "<br>","The element was not found in the array";
	
	
	
?>