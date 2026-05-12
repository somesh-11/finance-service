<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST['name'];

    $email = $_POST['email'];

    $message = $_POST['message'];

    echo "

    <h1>Application Submitted Successfully</h1>

    <h3>Name: $name</h3>

    <h3>Email: $email</h3>

    <h3>Message: $message</h3>

    ";

}

?>