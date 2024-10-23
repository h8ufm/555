<?php

$post = (!empty($_POST)) ? true : false;

if ($post) {
    $name = ($_POST['name']);
    $phone = ($_POST['phone']);
    $colServer = ($_POST['col-server']);
    $colStation = ($_POST['col-station']);
    $messagess = ($_POST['messagess']);
    $error = '';

    if (!$name) {
        $error .= '';
    }



    $error .= '';
}



if (!$phone || strlen($phone) < 1) {
    $error .= "";
}


if (!$error) {
    $subject = "Новый заказ с сайта ДедМорозка";
    $mail = mail("alex_suschin@mail.ru", $name, $phone, $colServer, $colStation);
    if ($mail) {
        echo 'OK';
    }

}
?>