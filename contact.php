<?php

if (isset($_POST['sumbit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailfrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailto = "me@abdulshahidsalau.com";
    $headers = "from: " .$mailfrom;
    $txt = "New email from ".$name.nl2br.$message;

    mail($mailto, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}

?>