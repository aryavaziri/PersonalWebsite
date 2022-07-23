<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


</body>

<?php


if (
    $_SERVER["REQUEST_METHOD"] == 'POST'
) {
    $my_rand = rand(10000000, 99999999);
    $_SESSION['verify'] = $my_rand;
    $link = "https://www.aaryaa.ir/verify2.php?ver=$my_rand";
    $to = check($_POST["mail"]);
    $_SESSION['mail'] = $to;
    $subject = 'verify your email';
    $from = 'portfolio@aaryaa.ir';
    $message = "Click on the link below to verify your email \n $link";
    if (mail($to, $subject, $message, $from)) {
        echo "Please check your Email. \n redirecting in 5 seconds...";
        header("refresh:5; projects.html");
    } else {
        echo "Server error. Please try again later.";
    }
} else {
    die();
}

function check($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>


</html>