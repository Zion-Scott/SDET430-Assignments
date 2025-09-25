<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<?php

    $FacesNamesSingular = array("one", "two", "three", "four,", "five", "six");
    $FacesNamesPlural = array("one", "two", "three", "four,", "five", "six");



    function CheckForDoubles($Die1, $Die2) {
        global $FacesNamesSingular;
        global $FacesNamesPlural;
        $ReturnValue = false;

        if ($Die1 == $Die2) {//Is it doubles?
            echo"The roll was a double ", 
            $FacesNamesPlural[$Die1-1], ".<br>";
            $ReturnValue = true;
        }

        else {//It is NOT doubles
            echo "The roll was a ",
            $FacesNamesSingular[$Die1-1], " and a ", $FacesNamesSingular[$Die2-1], ".<br>";
        }
        return $ReturnValue;
    }




    function DisplayScore($Score, $Doubles) {
        switch ($Score) {
        case 2:
            echo "You rolled a snake eyes! <br>";
            break;

        case 3:
            echo "You rolled a loose duece! <br>";
            break;

        case 5:
            echo "You rolled a fever five! <br>";
            break;

        case 7:
            echo "You rolled a natural! <br>";
            break;

        case 9:
            echo "You rolled a nina! <br>";
            break;
        
        case 11:
            echo "You rolled a yo! <br>";
            break;

            default:
            if ($Score % 2 == 0) {
                echo "You rolled a hard $Score!<br>";
            }
            else {
                echo "You rolled an easy $Score!<br>";
            }
        }
        
    }




$Dice = array();

$DoublesCount = 0;
$RollNumber = 1;

while ($RollNumber <= 5) {

$Dice[0] = rand(1,6);
$Dice[1] = rand(1,6);

$Score = $Dice[0] + $Dice[1];

echo "<p>";
echo "The total score for the roll was $Score.<br>";

$Doubles = CheckForDoubles($Dice[0],$Dice[1]);
DisplayScore($Score, $Doubles);
echo "</p>";

if ($Doubles)
    ++$DoublesCount;
++$RollNumber;

}

?>