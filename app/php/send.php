<?php

$fio = $_POST['fio'];
$email = $_POST['email'];
$phone = $_POST['phone'];

/*$fio = trim(
    urldecode(
    htmlspecialchars($fio)
));

$email = trim(
    urldecode(
    htmlspecialchars($email)
));

$phone = trim(
    urldecode(
    htmlspecialchars($phone)
));*/

echo $fio;
echo $email;
echo $phone;

?>