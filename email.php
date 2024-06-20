<?php


if (isset($_POST['reset'])) {
    // Clear the form fields
    $_POST['name'] = '';
    $_POST['subject'] = '';
    $_POST['msg'] = '';
    $_POST['email'] = '';
}


if (isset($_POST['send'])) {
    if (!empty($_POST['name']) && !empty($_POST['subject']) && !empty($_POST['msg']) && !empty($_POST['email'])) {
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $msg = $_POST['msg'];
        $email = $_POST['email'];
        $header = "From: noreply@example.com" ."\r\n";
        $header.= "Reply-To: noreply@example.com" ."\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        $mail = @mail($email,$subject,$msg,$header);
        if ($mail) {
            echo "<h4> Email sent successfully! </h4>";
        }
    }
}

?>