<!DOCTYPE html>
<html>
    <body>
        <?php
        //Error Display
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        ?>

                <?php
        $ClassesList = array(
            "Graphic Novels, Comics, & Cartoons", 
            "Software Web Applications II", 
            "Digital Crime", 
            "Internet Applications"
        );

        $DaysList = array(
            "Sunday",
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday"
        );


        function class_day($Class) {
            global $ClassesList;
            global $DaysList;

            switch($Class) {
                case "Sunday":
                    return "Today is Sunday and you have no classes today!";
                    break;
                
                case "Monday":
                    return "Today is Monday and you have " . $ClassesList[0] . " today at 14:30";
                    break;

                case "Tuesday":
                    return "Today is Tuesday and you have " . $ClassesList[1] . " today at 18:00";
                    break;

                case "Wednesday": 
                    return "Today is Wednesday and you have no classes today!";
                    break;

                    case "Thursday":
                    return "Today is Thursday and you have " . $ClassesList[0] . " today at 14:30.";
                    break;
        
                case "Friday":
                    return "Today is Friday and you have " . $ClassesList[2] . " today at 18:00.";
                    break;
        
                case "Saturday":
                    return "Today is Saturday and you have " . $ClassesList[3] . " class online today.";
                    break;
                
            }
        }

        echo class_day("Sunday") . "<br>";
        echo class_day("Monday") . "<br>";
        echo class_day("Tuesday") . "<br>";
        echo class_day("Wednesday") . "<br>";
        echo class_day("Thursday") . "<br>";
        echo class_day("Friday") . "<br>";
        echo class_day("Saturday") . "<br>";

        ?>
    </body>
</html>
