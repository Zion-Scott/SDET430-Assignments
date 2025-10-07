Result Size: 725 x 648
<!DOCTYPE html>
<html>
<body>

<?php
$ConfusingText = "THIs seNTEnCe iS HArD to rEAD.";

echo "<h1>Confusing Text</h1>";
echo "Original: $ConfusingText<br>";
echo "ucfirst: " . ucfirst($ConfusingText) . "<br>";
echo "lcfirst: " . lcfirst($ConfusingText) . "<br>";
echo "ucwords: " . ucwords($ConfusingText) . "<br>";


$ConfusingText = strtolower($ConfusingText);

echo "<h1>Lowercase Text</h1>";
echo "Original: $ConfusingText<br>";
echo "ucfirst: " . ucfirst($ConfusingText) . "<br>";
echo "lcfirst: " . lcfirst($ConfusingText) . "<br>";
echo "ucwords: " . ucwords($ConfusingText) . "<br>";


?> 

</body>
</html>