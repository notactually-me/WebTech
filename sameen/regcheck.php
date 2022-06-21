<?php

    $id = $_REQUEST["id"];
    $pass = $_REQUEST["password"];
    $cpass = $_REQUEST["conpassword"];
    $name = $_REQUEST["name"];
    $type = $_REQUEST["type"];

    if ($username == null || $pass == null || $cpass == null || $name == null || $type == null)
        {
            echo "Please enter valid details";
        }
    if ($pass != $cpass)
    {
        echo "Pasword does not match";
    }
    else
    {
        $file = fopen('reglist.txt','a');
        $user = $id."+".$pass."+".$name."+".$type."\r\n";
        fwrite($file,$user);

        header('location: login.php');
    }
    fclose($file);
?>