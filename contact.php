<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Hugo 0.88.1" />
    <title>Contact</title>

    <script src="https://kit.fontawesome.com/54e88f9de3.js" crossorigin="anonymous"></script>

    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/css.css" rel="stylesheet" />

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body class="d-flex h-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 p-3 mx-auto flex-column">
        <header class="mb-5">
            <div>
                <h3 class="float-md-start mb-0">Arya Vaziri</h3>
                <nav class="nav navbar-brand nav-masthead justify-content-center float-md-end">
                    <a class="nav-link" href="index.html">Home</a>
                    <a class="nav-link" href="projects.html">Projects</a>
                    <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
                </nav>
            </div>
        </header>

        <main>
            <div class="container-fluid row w-75 mx-auto">
                <div class="col-12 p-0 col-lg-7">
                    <form class="mx-auto row p-1" action="" method="post" name="contactMe" onsubmit="return _myAuth()">
                        <label class="pt-1 col-4" for="name">Name:</label>
                        <input class="col-8 my-1" autofocus name="name" type="text" />
                        <span id="name" class="col12"></span>
                        <label class="pt-1 col-4" for="mail">Email:</label>
                        <input class="col-8 my-1" name="mail" type="email" />
                        <span id="mail" class="col12"></span>
                        <label class="pt-1 col-4" for="subject">Subject:</label>
                        <input class="col-8 my-1" name="sub" type="text" />
                        <span id="sub" class="col12"></span>
                        <label class="pt-1 col-4" for="subject">Message:</label>
                        <textarea class="col-8 my-1" name="msg" rows="5" placeholder="Please write your message here"></textarea>
                        <span id="msg" class="col12"></span>
                        <button class="btn btn-primary mt-3">Send</button>
                    </form>
                </div>
                <div class="col-lg-1" style="height: 50px"></div>
                <div class="p-3 col-12 rounded-3 bg-opacity-10 col-lg-4 bg-light">
                    <h2 class="mb-4">Contact me</h2>
                    <h4>Email:</h4>
                    <p>arya.vaziri@gmail.com</p>
                    <h4>Phone number:</h4>
                    <p class="mb-4">+989025868086</p>
                    <a href="https://www.instagram.com/aryavaziri/" class="btn btn-secondary fs-4 rounded-circle"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/arya-vaziri-7116ab206/" class="btn btn-secondary fs-4 rounded-circle"><i class="fab fa-linkedin"></i></a>
                    <a href="mailto:arya.vaziri@gmail.com" class="btn btn-secondary fs-4 rounded-circle"><i class="fab fa-google"></i></a>
                    <a href="https://github.com/aryavaziri" class="btn btn-secondary fs-4 rounded-circle"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </main>
    </div>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>

    <script>
        function _myAuth() {
            let flag = 0
            let _name = document.forms['contactMe']['name'].value
            let _mail = document.forms['contactMe']['mail'].value
            let _sub = document.forms['contactMe']['sub'].value
            let _msg = document.forms['contactMe']['msg'].value
            // console.log(_age + _email + _pass + _phone)

            if (
                ((_mail.search(/<script/)) != -1) ||
                ((_name.search(/<script/)) != -1) ||
                ((_msg.search(/<script/)) != -1) ||
                ((_sub.search(/<script/)) != -1)
            ) {
                flag++
                window.close();
            }

            if (
                (_name.length < 4) ||
                (_name.length > 16)
            ) {
                document.getElementById('name').innerHTML = 'Please enter your name'
                document.getElementById('name').setAttribute('class', 'text-danger')
                flag++
            } else {
                document.getElementById('name').innerHTML = ''
            }

            if (
                (((_mail.match(/@/g))) == null) ||
                (((_mail.match(/@/g)).length) != 1) ||
                ((_mail.search(/@/)) < 3) ||
                (((_mail.search(/@/)) + 6) >= (_mail.length)) ||
                (((_mail.indexOf('.', (_mail.search(/@/)))) - 3) <= (_mail.search(/@/)))
            ) {
                document.getElementById('mail').innerHTML = 'Your mail is inccorect'
                document.getElementById('mail').setAttribute('class', 'text-danger')
                flag++
            } else {
                document.getElementById('mail').innerHTML = ''
            }


            if (_msg.length == 0) {
                document.getElementById('msg').innerHTML = 'Please write your message'
                document.getElementById('msg').setAttribute('class', 'text-danger')
                flag++
            } else {
                document.getElementById('msg').innerHTML = ''
            }

            if (flag != 0) {
                return false
            }

        }
    </script>



    <?php
    $headers = 'from : aaryaa.ir Contact Me page \r\n' . phpversion() . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $myMail = 'arya.vaziri@gmail.com';
    if (
        $_SERVER["REQUEST_METHOD"] == "POST"
    ) {
        // echo "<h2 style='color: green'>hi $contactForm[name], your comment recived. contact whit you soon by email address $contactForm[mail]</h2>";
        // all field are complete...
        $name = $_POST['name'];
        $sub = $_POST['sub'];
        $mail = $_POST['mail'];
        $txt = "<h3>This message has been send from $name</h3>";
        $txt .= "<h4>Email: $mail</h4>";
        $txt .= "<h4>Subject: $sub</h4>";
        $txt .= $_POST['msg'];
        mail($myMail, $_POST['sub'], $txt, $headers);
        echo "alert('Thanks for your message. I will contact you as soon as possible.')";
    }
    ?>


</body>

</html>