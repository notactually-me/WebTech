<html>
    <head>
        <title>
            Login
        </title>
        
        <!-- <script>
                function validId()
                {
                    if (username[0] != 'A')
                    {
                        document.getElementById('username')[0].innerHTML = "Enter Valid ID";
                    }

                }
            </script> -->
    </head>
    <body>
        <fieldset>
            <legend>Login</legend>
            <form action="../controller/logincheck.php" method="post" enctype="">
                <table>
                    <tr><td>User ID</td></tr>
                    <tr><td><input type="text" name="username" value="" oninput="validId()"/></td></tr>
                    <tr><td><p id="userid"></p></td></tr>
                    <tr><td>Password</td></tr>
                    <tr><td><input type="password" name="password" value="" onkeyup="validPass()"/></td></tr>
                    <tr><td><p id="pass"></p></td></tr>
                    <tr><td><input type="submit" name="submit" value="Submit"> <a href="../view/reg.php">Register</a></tr></td>
                </table>
            </form>
        </fieldset>
        <script>
                function validId()
                {
                    // document.write();
                    let username = document.getElementsByName('username').value;
                    if (username != 'A')
                    {
                        document.getElementById("userid").innerHTML = "Enter Valid ID";
                    }
                    else
                    {
                        document.getElementById("userid").innerHTML = "";
                    }


                }
                function validPass()
                {
                    let password = document.getElementsByName('password').value;
                    var len = password.length;
                    // document.write(len);
                    if(len < 8)
                    {
                        document.getElementById("pass").innerHTML = "Password must be atleast 8 letters";
                    }
                }
            </script>
    </body>
</html>