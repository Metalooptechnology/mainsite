<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo="metalooptechnologies@gmail.com";
    $headers="From:".$mailFrom;
    $txt= "You have recceived an Email from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $message, $headers);
    header("Location: index.html?mailsent");
}

?>
