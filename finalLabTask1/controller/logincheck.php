<?php 
require_once('../model/userModel.php');

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if($username == null || $password == null){
	echo "null username/password...";
}else{
	
	$status  = login($username, $password);

	if($status)
	{
		setcookie('status', 'true', time()+5500, '/');		
		header('location: ../view/home.html');
	}
	else
	{
		echo "invalid username/password";
	}
}

?>