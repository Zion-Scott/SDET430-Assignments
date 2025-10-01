<!DOCTYPE html>
<html>
<body>

<?php

$BookTitle = "The Cask of Amontillado";

echo "<p>The book title contains " .str_word_count($BookTitle). " words.</p>";
echo "<br>";

$BookTitle = "The Cask of Amontillado";
echo "<p>The book title contains " .strlen($BookTitle). " words.</p>";
?>

</body>
</html>

