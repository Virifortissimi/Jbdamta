<?php
// define variables and set them to empty values
$name_error  = $phone_error = $email_error = "";
$name = $phone = $email = $message = $success = "";
//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $name_error = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $name_error ="Only Letters and white space allowed";
        }
    }
    if (empty($_POST["email"])) {
        $email_error = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if email address is well formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error ="Invalid email format";
        }
    }
    if (empty($_POST["phone"])) {
        $phone_error = "Phone is required";
    } else {
        $phone = test_input($_POST["phone"]);
        // check if phone contains letters and whitespace
        if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i", $phone)) {
            $phone_error ="Ivalid Phone Number";
        }
    }
    // if (empty($_POST["url"])) {
    //     $url_error = "";
    // } else {
    //     $url = test_input($_POST["url"]);
    //     // check if url address synthax is valid (this regular expression)
    //     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www.)[-a-z0-9+&@#\/%?=~_|!:,.,;]*[-a-z0-9+&@#\/%=~_|]/i", $url)) {
    //         $url_error ="Invalid Url";
    //     }
    // }
    if (empty($_POST["message"])) {
        $message = "";
    } else {
        $message = test_input($_POST["message"]);
    }
    if ($name_error == "" and $email_error == "" and $phone_error == "") {
        $message_body = "";
        unset($_POST['submit']);
        foreach ($_POST as $key => $value) {
            $message_body .= "$key: $value\n";
        }
        $to = 'jbdamta@gmail.com';
        $subject = 'Contact Form Submitted';
        if (mail($to, $subject, $message)) {
            $success = "Your Message Has Been Submitted";
            echo $success;
            $name = $phone = $email = $message = "";
        }
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>