<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exeption;




require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/Exception.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', '../phpmailer/language/');
$mail->IsHtml(true);

$mail->setFrom('service@intel-trans.ru', 'Форма сайта');
$mail->addAddress('info@intel-trans.ru');
$mail->Subject = 'Письмо с сайта';


$body = '<h1>Письмо с сайта</h1>';
if(trim(!empty($_POST['name']))){
    $body.='<p><strong>Имя:</strong> '.$_POST['name'].'</p>';
}
if(trim(!empty($_POST['phone']))){
    $body.='<p><strong>Телефон:</strong> '.$_POST['phone'].'</p>';
}



$mail->Body = $body;



if (!$mail->send()) {
    $message = 'Ошибка';
} else {
    $message = 'Данные отправлены';
}

$response = ['message' => $message];
header('Content-type: application/json');
echo json_encode($response);
?>
