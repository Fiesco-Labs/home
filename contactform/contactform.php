<?php
ini_set("SMTP","ssl://smtp.gmail.com");
ini_set("smtp_port","465");
    $toEmail = "ishanavishka14@gmail.com";
    $mailHeaders = "From: " . $_POST["name"] . "<". $_POST["email"] .">\r\n";
    if(mail($toEmail, $_POST["subject"], $_POST["message"], $mailHeaders)) {
        print "<p class='success' style='color:black'>Mail Sent.</p>";
    } else {
        print "<p class='Error' style='color:black'>Problem in Sending Mail.</p>";
    }
?>