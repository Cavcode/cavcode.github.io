<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['Message'];

    $email_from = 'Cavcode.com';

    $email_subject = "Contact Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

    $to = "cameronav23@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

?>