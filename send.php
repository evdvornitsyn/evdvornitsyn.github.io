<?php
     $name = $_POST['user_name'];
     $phone = $_POST['phone'];
     $message = $_POST['message'];

     $name = htmlspecialchars($name);
     $phone = htmlspecialchars($phone);
     $message = htmlspecialchars($message);

     $name = urldecode($name);
     $phone = urldecode($phone);
     $message = urldecode($message);

     $name = trim($name);
     $phone = trim($phone);
     $message = trim($message);



     if (mail("admin@evgenydvornitsyn.online", 
                 "Новое письмо с сайта",
                 "Имя отправителя: ".$name."\n".
                 "Сообщение: ".$message."\n".
                 "Телефон: ".$phone,
                 "From: no-reply@mydomain.ru \r\n")
     ) {
        echo ('Письмо успешно отправлено!');
     }

     else {
        echo ('Есть ошибки! Проверьте данные...');
     }
     
?>
