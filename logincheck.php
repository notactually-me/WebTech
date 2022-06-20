<?php

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if ($username == null || $password == null)
    {
        echo "Fields cannot be empty";
    }
    else
    {
        $file = fopen('users.txt','r');
        while(!feof($file))
        {
            $data = fgets($file);
            $user = explode('#', $data);

            if($username == $user[0] && $password == $user[1])
            {
                setcookie('status', 'true', time()+3000, '/');
                header('location: home.php?username='.$username);
            }
            
        }
        echo "invalid usernamee/password";

    }



?>