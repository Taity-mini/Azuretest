<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 02/11/2015
 * Time: 13:28
 * Home page
 */
function displayAccessLevelInformation($accessLevel){
    if($accessLevel == "standarduser"){
        echo "<p>You are currently logged in as a standard user</p>";
    }
    elseif ($accessLevel == "root"){
        echo "<p> You are curently logged in as a root user,</p>";
        echo"<p>You now have access to additonal adminstrative features</p>";
    }

}
//$accessLevel = ;

displayAccessLevelInformation($_COOKIE['access_level']);



?>



