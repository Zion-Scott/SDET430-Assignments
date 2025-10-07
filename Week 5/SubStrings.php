<!DOCTYPE html>
<html>
<body>

<?php

$ExampleString = "seCret! apple blue";
echo md5($ExampleString,4) . "<br />\n"; //md5 funtion encrypts variables
echo str_shuffle($ExampleString,4,7) . "<br />\n"; //str_shuffle shuffles variables
echo substr($ExampleString,0,8) . "<br />\n";
echo substr($ExampleString,-7) . "<br />\n";
echo substr($ExampleString,-12,4) . "<br />\n";

?>

</body>
</html>