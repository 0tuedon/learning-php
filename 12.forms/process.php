<?php

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $username = htmlspecialchars(trim($_GET["username"]));
    $password =  htmlspecialchars(trim($_GET["password"]));

    if (!empty($username) &&  !empty($password)) {
        echo " I AM HIM GET";
    }
} elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username_err = $email_err = "";
    $username =  htmlspecialchars(trim($_POST["username"]));
    $email =  htmlspecialchars(trim($_POST["email"]));

    if (empty($username)) {
        $username_err = "Username is Required";
    }
    if (empty($email)) {
        $email_err = "Email is Empty";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_err =  "Invalid Email";
    }

    if (!empty($username_err) || !empty($email_err)) {
        echo $username_err;
        echo  "<br />";
        echo $email_err;
    } else {
        echo "Form Submitted";
        echo "<br/>";
        echo "Username: " . $username . "<br/>" . "Email: " . $email;
    }
} else {
    echo "Error: No Request Method received";
}
