<?php
$name = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone_number']; 

$name = htmlspecialchars($name);
$lastName = htmlspecialchars($lastName);
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);

$name = urldecode($name);
$lastName = urldecode($lastName);
$email = urldecode($email);
$phone = urldecode($phone);

$name = trim($name);
$lastName = trim($lastName);
$email = trim($email);
$phone = trim($phone);

if (mail("maksym.zaika@neogara.club", "Заявка с сайта", "ФИО:" .$name. " " .$lastName. " " . "E-mail: " .$email. ". ". "Телефон пользователя: " .$phone,"From: maksym.zaika@neogara.club \r\n"))
 {     
    header('location: thanks.html');
} else {
    echo "при отправке сообщения возникли ошибки";
}?>