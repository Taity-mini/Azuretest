<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Deployment Test</title>
</head>
<body>
<p>
<?php
    echo"Hello,"."". "World" . "!";
    echo 5*7;

    //variables
    $myname = "Frodo Baggins";
    $myage = 111;

    echo'<BR/>';
    echo "My name is " . $myname . " and I am " . $myage;

    $name = "Edgar";

    if ($name == "Simon") {
        print "I know you!";
    }
    else {
        print "Who are you?";
    }

$numberofHobbits = 2;

switch ($numberofHobbits) {
    case 1:
        echo"1 sad hobbit";
       break;
    case 2:
        echo"2 happy hobbits";
       break;
    case 3:
        echo "3 hobbits are a crowd";
        break;
    default:
        echo"All the hobbits have gone home";

}


?>
</p>
</body>
</html>
