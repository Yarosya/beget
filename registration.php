<?php
$name = $_POST['username'];
$email = $_POST['email'];


$name = htmlspecialchars($name);
$email = htmlspecialchars($email);


$name = urldecode($name);
$email = urldecode($email);


$name = trim($name);

$email = trim($email);


if (mail("maksym.zaika@neogara.club", "Новый пользователь", "Имя: " .$name.". E-mail: " .$email,"From: maksym.zaika@neogara.club \r\n"))
 {     
    header('location: registration.html');
} else {
    echo "при отправке сообщения возникли ошибки";
}?>