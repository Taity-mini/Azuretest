<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 02/11/2015
 * Time: 13:25
 */

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<body>
<H1>Login</H1>
<form action ="./check_login.php" method="post">
    <label for="Username">Username</label>
<input type="text" name ="username" title ="Username"/>
<label for="password" >Password:</label>
    <input type ="password" name ="pass" title ="Password"/>
<input type ="submit" name ="submit" value ="Login"/>
<input type ="reset" value="Reset"/>
</form>
</body>
</html>
