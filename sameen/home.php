<?php
    if(isset($_COOKIE['status']))
    {
        $name = $_REQUEST["name"];
?>
<html>
    <h1>Welcome, <?php echo $name ?></h1><br>
    <a href="profile.php">Profile</a><br>
    <a href="">Change Password</a><br>
    <a href="logout.php">Logout</a>
</html>
<?php
    }
    else
    {
        echo "Invalid request";
    }
?>