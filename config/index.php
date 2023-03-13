<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="submit" name="send">
    </form>
    <?php

        require("src/PHPMailer.php");
        require("src/SMTP.php");
        require("src/Exception.php");

            $mail = new PHPMailer\PHPMailer\PHPMailer();
            $mail->IsSMTP(); // enable SMTP

            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = true; // authentication enabled
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 465; // or 587
            $mail->IsHTML(true);
            $mail->Username = "thanhtree2502@gmail.com";
            $mail->Password = "fwryxuycehhflhja";
            $mail->SetFrom("thanhtree2502@gmail.com");
            $mail->Subject = "Test";
            $mail->Body = "hello tree";
            $mail->AddAddress("thanhtree2502@gmail.com");

            if(!$mail->Send()) {
                echo "Mailer Error: " . $mail->ErrorInfo;
            } else {
                echo "Message has been sent";
            }
    ?>
</body>
</html>