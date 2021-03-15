<?php
    if(isset($_POST["submit"])) {
        if($_POST["vname"]==""||$_POST["vemail"]==""||$_POST["sub"]==""||$_POST["msg"]=="") {
            echo "Fill All Fields..";
        } else {
            $email=$_POST['vemail'];
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            if (!$email) {
                echo "Invalid Sender's Email";
            } else {
            $subject = $_POST['sub'];
            $message = $_POST['msg'];
            $headers = 'From'. $email2 . "rn";
            $headers = 'Cc:' . $email3 . "rn";
            $message = wordwrap($message, 70);
            mail("cwheeler6754@lcmail.lcsc.edu", $subject, $message, $headers);
            echo "Your message has been sned successfully! Thanks you for your response!";
            }
        }
    }
?>