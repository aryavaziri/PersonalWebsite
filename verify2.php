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
    <?php
    $test = $_GET[check('ver')];
    $mail = $_SESSION['mail'];
    $portfolio = "https://www.aaryaa.ir/Portfolio-25.pdf";
    if (
        $test == $_SESSION['verify']
    ) {
        echo "<h1>congratulations. email : $mail has been verified.</h1>";
        if (mail($mail, "Portfolio", "This is portfolio link: \n $portfolio", 'arya.vaziri@gmail.com')) {
            echo "<h1>Now Check your Email again. Portfolio has been emailed. Redirecting in 5 seconds...</h1>";
            header("refresh:5; projects.html");
        } else {
            echo "Server error. Please try again later.";
        }
    } else {
        echo "<h1>Not verified</h1>";
    }
    function check($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    session_destroy();
    session_unset();
    ?>
</body>

</html>