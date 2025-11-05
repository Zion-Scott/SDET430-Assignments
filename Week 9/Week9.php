<?php
    $Dir = "homework";
    $DirOpen = opendir($Dir);
    while ($CurFile = readdir($DirOpen)) {
        if ((strcmp($CurFile, '.') != 0) &&
            (strcmp($CurFile, '..') != 0))
            echo "<a href=\"homework/" . $Curfile . "\">" .
            $CurFile . "</a><br />";
    }
    closedir($DirOpen);
?>