<form action="uploader.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="MAX_FILE_SIZE" value="4000000" />
<input type="file" name="new_file" />
<input type="submit" name="upload" value="Upload File" />

</form>

<?php
$Dir = "Homework"; //Change this var to the file you'd like it to access.
if (isset($_POST['upload'])) { 
if (isset($_FILES['new_file'])) {
if
(move_uploaded_file($_FILES['new_file']['tmp_name'], $Dir
. "/" . $_FILES['new_file']['name']) == TRUE)
echo "File \"" .
htmlentities($_FILES['new_file']['name']) . "\" successfully
uploaded.<br />\n";
else
echo "There was an error uploading \"" .
htmlentities($_FILES['new_file']['name']) . "\".<br />\n";
}
}

echo '<button onclick="window.location.href=\'index.php\'">Return to Homepage</button>';
?>


