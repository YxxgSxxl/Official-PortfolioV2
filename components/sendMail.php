<?php
// Make every POST response a variable
foreach ($_POST as $key => $value) {
    ${$key} = $value;
    // echo $name;
    // echo $email;
    // echo $subject;
    // echo $message;
}

$mailHeader = "From:" . $name . "<" . $email . ">\r\n";

$recipient = "contact.eckesalex14@gmail.com";

mail($recipient, $subject, $message, $mailHeader)
or die("Error!");


header('Location: ../index.php');