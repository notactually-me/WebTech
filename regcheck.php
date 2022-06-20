<?php
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];
    $fname = $_REQUEST['fname'];

    if ($username == null || $password == null || $email == null)
    {
        echo "Fields cannot be empty";
    }
    else
    {
        $user = $username."#".$password."#".$email."\r\n";
        $file = fopen('users.txt','a');
        fwrite($file,$user);
        if($fname == 'signup')
        {
            header('location: login.php');
        }
        else
        {
            header('location: home.php');
        }

    }
    fclose($file);

?>