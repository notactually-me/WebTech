<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <form action="regcheck.php" method="post" enctype="">
            <fieldset>
                <legend>Registration</legend>
                <table>
                    <tr><td>ID</td></tr>
                    <tr><td><input type="text" name="id" id="id" value=""/></td></tr>
                    <tr><td>Password</td></tr>
                    <tr><td><input type="password" name="password" id="id" value=""/></td></tr>
                    <tr><td>confirm password</td></tr>
                    <tr><td><input type="password" name="conpassword" id="id" value=""/></td></tr>
                    <tr><td>Name</td></tr>
                    <tr><td><input type="text" name="name" id="id" value=""/></td></tr>
                    <tr><td>User Type</td></tr>
                    <tr>
                        <td><input type="radio" name="type" value="user"/>User <input type="radio" name="type" value="admin">Admin</td>
                    </tr>
                    <tr><td><input type="submit" name="submit" value="Submit"/><a href="login.php">Login</a></td></tr>
                </table>
            </fieldset>

        </form>
    </body>
</html>