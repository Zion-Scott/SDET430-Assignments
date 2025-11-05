<?php
    function displayRequired($fieldName) {
        echo "The field \"$fieldName\" is required. <br> />";
    }

    function validateInput($data, $fieldName) {
        global $errorCount;
        if (empty($data)) {
            displayRequired($fieldName);
            ++$errorCount;
            $retval = "";
        }
        else {
            $retval = trim($data);
            $retval = stripslashes($retval);
        }
        return($retval);
    }

    $errorCount = 0;

    $firstName = validateInput($_POST['fname'], "First Name");

    $lastName = validateInput($_POST['lname'], "Last Name");

    if ($errorCount>0)
        redisplayform($firstName,$lastName);
    else {
        $To = "zds@njit.edu";
        $subject = "Scholarship Form Submission";
        $message = "Student Name: " . $firstName . " " . $lastName;

        $result = mail($To,$subject,$message);
        if ($result)
            $resultMessage = "Thank you for your Submission";
        else $resultMessage = "There was a problem sending your information.";
    }
        echo $resultMessage;


?>