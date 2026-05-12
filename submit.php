<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST['name'];

    $email = $_POST['email'];

    $message = $_POST['message'];

    $data = "

Name: $name
Email: $email
Message: $message

------------------------

";

    file_put_contents(
        "applications.txt",
        $data,
        FILE_APPEND
    );

    echo "

    <html>

    <head>

        <title>Application Submitted</title>

        <style>

            body{

                font-family:Arial;

                text-align:center;

                padding-top:100px;

                background:#f4f4f4;
            }

            h1{

                color:green;
            }

            a{

                text-decoration:none;

                color:white;

                background:#0b1f3a;

                padding:12px 25px;

                border-radius:5px;
            }

        </style>

    </head>

    <body>

        <h1>
            Application Submitted Successfully
        </h1>

        <h2>
            Thank You $name
        </h2>

        <br>

        <a href='javascript:history.back()'>
            Go Back
        </a>

    </body>

    </html>

    ";

}

?>
