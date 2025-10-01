<!DOCTYPE html>
<html>
<body>

<?php

$emailAddresses = array(
    "john.smith@php.test",
    "mary.smith.mail.php.example",
    "john,jones@php.invalid",
    "jsmith4@example.com",
    "alan.smith@test",
    "mjones@example",
    "mjones@example.net",
    "jane.a.doe@example.org"
);

function validateEmail($address) {
    if(strpos($address, '@') !== FALSE && (strpos($address, '.') !== FALSE))
        return TRUE;
else
    return FALSE;
}

foreach ($emailAddresses as $address) {
    if (validateEmail($address) == FALSE)
        echo "The e-mail address $address does not appear to be valid. <br>";
}

foreach ($emailAddresses as $address) {
    if (validateEmail($address) == TRUE)
        echo "The e-mail address $address is super valid. <br>";
}


?>

</body>
</html>
