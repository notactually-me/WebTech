<?php
	
	$email = $_REQUEST['email'];

	if ($email == null)
	{
		echo "email cannot be null";
	}
	else if  (!strstr($email, '@')
	{
		echo "Please enter valid email address. \nE.g. example@email.com";
	}


?>