<!DOCTYPE html>
<html>
    <body>
        <?php
        $player_score = 24; 

        ($player_score <= 21) ? $result = "Player is still alive.":
        $result = "Player is out of the game.";

        echo $result;

        ?>

    </body>
</html>
