<?php

if($_POST["name"] && $_POST["contact"]) {
    $recipient="cantrelldm@appstate.edu";
    $subject=$_POST["name"] . ' - BE EPIC web registered';
    $name=$_POST["name"];
    $senderEmail=$_POST["contact"];
	$senderMessage=$_POST["message"];

    $mailBody="Name: $name\nEmail: $senderEmail\nmessage: $senderMessage\n\n";

    mail($recipient, $subject, $mailBody, "From: $name <$senderEmail>");
    
    if ( preg_match( "/[\r\n]/", $name ) || preg_match( "/[\r\n]/", $senderEmail ) ) {
        $url = 'http://appstatedesign.com/?success=false';
        header('Location: ' . $url, false, 302);
        exit;
    } else {
    
    $url = 'http://appstatedesign.com/?success=true';
    header('Location: ' . $url, false, 302);
    exit; }
    
}

?>