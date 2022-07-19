<?php

	require_once('db.php');

	function login($username, $password)
	{		
		$conn = getconnection();
		$sql = "select * from users where id='{$username}' and pass='{$password}'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

	    if($count > 0)
	    {
			return true;
		}
		else
		{
			return false;
		}
	}


?>