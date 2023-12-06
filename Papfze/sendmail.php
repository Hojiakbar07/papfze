<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $name = $_POST['name'];
     $email = $_POST['email'];
     $message = $_POST['message'];
   
     // Настройки SMTP сервера
     $smtpHost = 'smtp.gmail.com';
     $smtpUsername = 'papfze.co@gmail.com';
     $smtpPassword = '';
     $smtpPort = 587;
   
     // Email получателя
     $toEmail = 'chorievhojiakbar07@gmail.com';
   
     // Заголовки письма
     $headers = "From: $name <$email>" . "\r\n";
     $headers .= "Reply-To: $email" . "\r\n";
     $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
   
     // Тело письма
     $mailBody = "<h2>Новое сообщение от формы обратной связи</h2>
       <p><b>Имя:</b> $name</p>
       <p><b>Email:</b> $email</p>
       <p><b>Сообщение:</b></p>
       <p>$message</p>";
   
     // Отправляем письмо
     if (mail($toEmail, 'Новое сообщение от формы обратной связи', $mailBody, $headers)) {
       echo 'Письмо успешно отправлено.';
     } else {
       echo 'Ошибка при отправке письма.';
     }
   }
?> 