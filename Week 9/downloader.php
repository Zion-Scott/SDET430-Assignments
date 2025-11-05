<?php
$Dir = "files";
if (isset($_GET['filename'])) {
    $FileToGet = $Dir . "/" . stripslashes($_GET['filename']);
    if (is_readable($FileToGet)) {
        header("Content-Description: File Transfer");
        header("Content-Type: application/force-download");
        header("Content-Disposition: attachment; filename=\"" . $_GET['filename'] . "\"");
        header("Content-Transfer-Encoding: base64");
        header("Content-Length: " . filesize($FileToGet));
        readfile($FileToGet);
        $ShowErrorPage = FALSE;
}
else
    $ShowErrorPage = TRUE;
}
else
    $ShowErrorPage = TRUE;
If ($ShowErrorPage) {
?>
<p>There was an error downloading "<?php echo htmlentities($_GET['filename']); ?>"</p>
<?php
}
?>