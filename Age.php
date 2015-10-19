<?php
/**
 * Created by PhpStorm.
 * User: 1504693
 * Date: 19/10/2015
 * Time: 15:41
 */
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Age Activity</title>
</head>
<body>
<p>
<?php
$wantedgood = "mugs";

switch ($wantedgood) {
    case "Specs":
        echo" You have to 16 to buy specs";
        break;
    case "mugs":
        echo"You have to be 18 to buy mugs";
        break;
    case "rolls":
        echo "You have to be 21 to  buy rolls";
        break;
    default:
        echo"Invalid item";

}


?>
</p>
</body>
</html>
