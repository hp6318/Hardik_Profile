<?php

if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $mailFrom=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $mailTo="hp.6318@gmail.com";
    $headers="From: ".$mailFrom;
    $txt=.$subject".\n\n".$message;

    mail($mailTo,$name,$txt,$headers);

    header("Location: index.html?MessageSent");
}
?>