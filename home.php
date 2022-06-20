<?php
    if(isset($_COOKIE['status']))
    {
   
?>
<html>
    <h1>WELCOME</h1>
    <a href="logout.php">logout</a>
</html>

<?php
    }
    else
    {
        echo "invalid request";
    }
?>