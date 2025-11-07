<!DOCTYPE html> 
<html>
    <title>Validate Credit Card</title>

    <body>
        <h1>Validate Credit Card</h1>
        <?php
            $CreditCard = array(
                "",
                "0912-1208-4859-2847",
                "OOOO-2038-2308-0284");

            foreach ($CreditCard as $CardNumber) {
                if (empty($CardNumber))
                    echo "<p>This Credit Card number is invalid 
                    because it contains an empty string</p>";
                else {
                    $CreditCardNumber = $CardNumber;
                    $CreditCardNumber = str_replace("-", "", $CreditCardNumber);
                    $CreditCardNumber = str_replace(" ", "", $CreditCardNumber);
                    if (!is_numeric($CreditCardNumber))
                        echo "<p>Credit Card number " . $CreditCardNumber . " is not a valid 
                        Credit Card number because it contains a non-numeric character.</p>";
                    else {
                        echo "<p>Credit Card Number " . $CreditCardNumber . " is a valid 
                        Credit Card number.</p>";
                    }
                }
            }

        ?>
    </body>
</html>
