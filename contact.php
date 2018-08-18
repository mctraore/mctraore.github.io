<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $from = $_POST['from']
    $message = $_POST['message'];
    
    $send = "mctraore@icloud.com";
    $headers = "From: ".$from;
    $txt = "You have received an email from ".$from." .\n\n".$message;
    
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
    
}