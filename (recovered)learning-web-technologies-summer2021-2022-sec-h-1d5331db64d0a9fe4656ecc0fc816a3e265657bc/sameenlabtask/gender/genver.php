<?php
	
	$gender = $_REQUEST['gender'];

	if ($gender == "male")
	{
		echo "You are Male";
	}
	else if  ($gender == "female")
	{
		echo "You are Female";
	}
	else if  ($gender == "other")
	{
		echo "You are hidden";
	}
	else 
	{
		echo "Please select an option";
	}

?>