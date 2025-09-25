<?php

function city_location($City) {
	switch($City) {
    	case "Boston":
            return "Massachusetts";
            break;
        
    	case "Chicago":
            return "Illinois";
            break;

    	case "New York":
            return "New York";
            break;

    	case "Los Angeles":
            return "California";
            break;

    	case "Miami":
            return "Florida";
            break;

    	case "Seattle":
            return "Washington";
            break;

        default:
            return "Did not find Match";
            break;
    }
}

echo city_location("Boston") . "<br>";
echo city_location("Houston") . "<br>";
?>