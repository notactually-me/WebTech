<?php
    session_start();
    if(isset($_COOKIE['astatus']) && isset($_SESSION['id']) && isset($_SESSION['pass']))
    {
        $file = fopen('reglist.txt','r');
        
        $userdata = array();
        while(!feof($file))
        {
            $data = fgets($file);
            $user = explode("|",$data);
            
            if($user[0] == $_SESSION['id'])
            {
                foreach($user as $item)
                {
                    array_push($userdata,$item);
                }

            }
        }
        fclose($file);

        $skillset = fopen('skill_list.txt', 'r');
        $skill = array();
        while(!feof($skillset))
        {
            $data = fgets($skillset);
            $user = explode("|",$data);
            
            if($user[0] == $_SESSION['id'])
            {
                foreach($user as $item)
                {
                    array_push($skill, $item);
                }

            }
        }
        $skills = implode(', ', array_slice($skill,3));

    
?>
<html>
    <head><title>User Profile</title></head>
    <body>
        <a href="ahome.php">Go Home</a>

        <table border="1px" style="width:40%">
            <tr><th colspan="2">Profile</th></tr>
            <tr style="height: 30px;">
                <td style="width: 50%;">Name:</td>
                <td><?php echo $userdata[2]; ?></td>
            </tr>

            <tr style="height: 30px;">
                <td>ID:</td>
                <td><?php echo $userdata[0]; ?></td>
            </tr>

            <tr style="height: 30px;">
                <td>Email:</td>
                <td><?php echo $userdata[3]; ?></td>
            </tr>

            <tr style="height: 30px;">
                <td>Date Of Birth:</td>
                <td><?php echo $userdata[6]; ?></td>
            </tr>

            <tr style="height: 30px;">
                <td>Gender:</td>
                <td><?php echo $userdata[7]; ?></td>
            </tr>

            <tr style="height: 30px;">
                <td>Address:</td>
                <td><?php echo $userdata[5]; ?></td>
            </tr>

            <tr style="height: 30px;">
                <td>Phone:</td>
                <td><?php echo $userdata[4]; ?></td>
            </tr>

            <tr style="height: 30px;">
                <td>Degree:</td>
                <td><?php echo $userdata[8]; ?></td>
            </tr>

            <tr style="height: 30px;">
                <td>Years of experience:</td>
                <td><?php echo $userdata[9]; ?> years</td>
            </tr>

            <tr style="height: 30px;">
                <td>Skills:</td>
                <td><?php echo $skills; ?></td>
            </tr>
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
