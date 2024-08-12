<?php
$to = "evrf4@mail.ru";
$from = trim($_POST['email']);
$message = 'hello';
$subject = 'example';

$headers = "From: $from"."\r\n".
"Reply-To: $from"."\r\n".
"X-Mailer: PHP/".phpversion();

if(mail($to, $subject, $message, $headers)){
    echo 'Письмо отправлено';
}else{
    echo 'Письмо не отправлено';
}
?>