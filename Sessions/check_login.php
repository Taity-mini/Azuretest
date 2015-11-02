<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 02/11/2015
 * Time: 13:40
 * Check login
 */
session_start();
$username = 'Mike';
$password = 'mysecretpassword';
$loginUsername = $_POST['username'];
$loginPass= $_POST['pass'] ;




if (!empty($_POST)){
    if($loginUsername = $username && $password= $loginPass)
    {
        //setcookie('access_level','standarduser');

        $_SESSION['access_level'] = 'standarduser';
    }
    header("location: ./homepage.php");
}


?>