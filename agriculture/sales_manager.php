<?php
    session_start();
    if(isset($_COOKIE['astatus']) && isset($_SESSION['id']) && isset($_SESSION['pass']))
    {
    
?>
<html>
    <head><title>Manager List</title></head>
    <body>
        <a href="ahome.php">Go Home</a>

        <table border="1px" style="width:85%">
            <tr><th colspan="11">Sales Manager</th></tr>
            <tr>
                <th>ID</th><th>Name</th><th>User Type</th><th>Distribution</th><th>Gender</th><th>Phone Number</th>
                <th>Email</th><th>Date of Birth</th><th>Experience</th><th>Education</th><th>Degree</th>
            </tr>
            <?php
                $file = fopen('managerList.txt','r');
        
                $userdata = array();
                while(!feof($file))
                {
                    $data = fgets($file);
                    $user = explode("|",$data);
                    
                    
                    if($data != null)
                    {
                        echo "<tr style='text-align: center'>";
                            for($i = 0; $i<count($user); $i++)
                            {
                                echo "<td>".$user[$i]."</td>";
                            }
                        echo "</tr>";
                    }
                    
                }
                fclose($file);
            
            ?>
        </table>
    </body>
</html>
<?php
    }
    else
    {
        echo "Invalid request";
        echo "<br><a href='login.php'>Login</a>";
    }
?>
