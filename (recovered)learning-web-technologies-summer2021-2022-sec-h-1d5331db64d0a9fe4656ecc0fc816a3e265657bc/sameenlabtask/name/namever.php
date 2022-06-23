<?php
	
	$n_ame = $_REQUEST['name'];



	if($n_ame == null)
	{
		echo "Name cannot be empty";
	}
	else 
	{
		if($n_ame[0] <='a'  || $n_ame[0] >= 'z')
			{
				echo "Name should start with letter";
			}
		else if(!strstr($n_ame, ' '))
			{
				echo "Name must be atleast 2 words";
				
			}
		else
			{
				echo "Your name is ", $n_ame;
			}
	}	


?>