<?php
$class = "error";

$alert_message = "User Name or Password is wrong!!!";

if ($result == 1) {

    $alert_message = "Successfully Logged in!!!";

    $class = "";
} else if ($result == -1) {

    $class = "error";

    $alert_message = "Your account is suspended!!!";
} else if ($result == 3) {

    $class = "error";

    $alert_message = "Account not created! Please contact admin!!!";
}
?>
<span><?php echo $alert_message ?></span>