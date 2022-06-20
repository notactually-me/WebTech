<?php
    
    setcookie('status', 'true', time()-5,'/');
    header('location: login.php');
?>