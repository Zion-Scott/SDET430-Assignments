<?php
    $Dir = "homework";
    if (is_dir($Dir)) {
            echo "<table border='1' width='100%'>\n";
            echo "<tr><th>Filename</th><th>File Size</th>
            <th>File Type</th></tr>\n";
            $DirEntries = scandir($Dir);
        foreach ($DirEntries as $Entry) {
            $EntryFullName = $Dir . "/" . $Entry;
            echo "<tr><td>" . htmlentities($Entry) . "</td><td>" .
            filesize($EntryFullName) . "</td><td>" .
            filetype($EntryFullName) . "</td></tr>\n";
            }
            echo "</table>\n";
        }
        else
        echo "<p>The directory " . htmlentities($Dir) . " does not
        exist.</p>";

?>