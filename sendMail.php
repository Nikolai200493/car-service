<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";

$today = date("Y-m-d H:i");


$mes1 = '<html>
    <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Тема страницы</title>
    </head>
    <body>
        <h1 style="background-color:tomato; color:white; width:50%;padding-left:15px;">Новый заказ! '.$today.'</h1>
        <p>Имя: '.$name.'</p>
        <p>Номер телефона: '.$phone.'</p>
        <p>Комментарий: '.$comment.'</p>
    </body>
</html>';

$thems = "Новый заказ ".$today;
mail("shaitor1993@mail.ru", "$thems","$mes1",$headers);






?>
