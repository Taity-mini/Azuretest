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
    echo'<BR/>';
    $name = "Edgar";

    if ($name == "Simon") {
        print "I know you!";
    }
    else {
        print "Who are you?";
    }
echo'<BR/>';
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

//Arrays
echo'<BR/>';
echo "Arrays";
echo'<BR/>';
$myArray = array("do", "re", "mi"); //declares the array
echo $myArray[0]; // outputs "do"
$myArray[1] = "la";
echo $myArray[1]; //outputs "la"
unset($myArray[2]); //removes the array in postion 2

echo'<BR/>';

$provisionedActivities = array("Specs" ,"Drugs", "and ", "Rock and Roll");
foreach($provisionedActivities as $x) {
    print "<p>$x</p>";
}
echo'<BR/>';
$provisionedActivities[1] = "hugs";
$provisionedActivities = array("Specs" ,"Drugs", "and ", "Rock and Roll");
foreach($provisionedActivities as $x) {
    print "<p>$x</p>";
}
echo'<BR/>';
unset($provisionedActivities[3]);
foreach($provisionedActivities as $x) {
    print "<p>$x</p>";
}

//Loops

for ($i = 1; $i < 10; $i++)
{
    echo "<p>Hello!</p>";
}



for ($i = 1; $i < 30; $i++)
{
    $found = false;
    if ($i % 2 == 0)
    {
        if ($i % 4 == 0)
        {
            echo "On the ". $i. " th month specs and sausage rolls are available";
            $found = true;
        }
        else
        {
            echo "On the ". $i. "  month specs are available";
            $found = true;
        }


    }

    elseif($i % 3 == 0)
    {
        echo "On the ". $i. " rd month mugs are available";
        $found = true;
    }



    elseif($found == false )
    {
        echo "On the ". $i. " of the month no products are available";
    }

    echo'<BR/>';

}




?>
</p>
</body>
</html>
