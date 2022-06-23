<?php
  $number1 = 44;
  $number3 = 87;
  $number2 = 21;

  
  echo "Provided Numbers: ", $number1;
  echo ", ", $number2;
  echo ", ", $number3;

  if ($number1 > $number2 && $number1 > $number3)
  {
	echo "<br>";
	echo $number1, " is largest";
  }

  elseif ($number2 > $number1 && $number2 > $number3)
  {
	echo "<br>";
	echo $number2, " is largest";
  }

  elseif ($number3 > $number2 && $number3 > $number1)
  {
	echo "<br>";
	echo $number3, " is largest";
  }
 
 
  
 ?>