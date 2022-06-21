<?php

    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];

    $file = fopen('reglist.txt','r');
    if ($username == null || $password == null)
        {
            echo "Please enter valid username/password";
        }
        else
        {
            while(!feof($file))
            {
                $data = fgets($file);
                $user = explode("+",$data);
                $isuser = "admin";

                
                if ($username == $user[0] && $password == $user[1])
                {
                    if($isuser == $user[3])
                    {
                        setcookie('astatus', 'alogin', time()+2000, '/');
                        header('location: ahome.php?name='.$user[2]);
                    }
                    else
                    {
                        setcookie('status', 'login', time()+2000, '/');
                        header('location: home.php?name='.$user[2]);
                    }
                
                }
                
                else
                {
                    echo "Invalid username/password";
                }
            
            }
        }

?>