<?php
    $Dir = "Homework/Comments";
    if (is_dir($Dir)) {
        if (isset($_POST['save'])) {
            if (empty($_POST['name']))
            $SaveString = "Unknown Visitor\n";
            else
            $SaveString = stripslashes($_POST['name']) . "\n";
            $SaveString .= stripslashes($_POST['email']) . "\n";
            $SaveString .= date('r') . "\n";
            $SaveString .= stripslashes($_POST['comment']);
            $CurrentTime = microtime();
            $TimeArray = explode(" ", $CurrentTime);
            $TimeStamp = (float)$TimeArray[1]+(float)$TimeArray[0];
            // File name is "Comment.seconds.microseconds.txt"
            $SaveFileName = "$Dir/Comment.$TimeStamp.txt";
            if (file_put_contents($SaveFileName, $SaveString)>0)
            echo "File \"" . htmlentities($SaveFileName) . "\" successfully saved.<br />\n";
            else
            echo "There was an error writing \"" . htmlentities($SaveFileName) . "\".<br />\n";
            }
        }
?>

<h2>Visitor Feedback</h2>

<form action="visitor_comments.php" method="POST">
    Your Name: <input type="text" name="name"/><br />
    Your Email: <input type="text" name="email"/><br />
</form>
<textarea name="comment" rows="6" cols="100">