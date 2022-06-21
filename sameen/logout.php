<?php

    setcookie('status', 'login', time()-10, '/');
    header('location: login.php');


?>