<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Hugo 0.88.1" />
    <title>Login</title>

    <script src="https://kit.fontawesome.com/54e88f9de3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
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
        <header class="mb-5 border-bottom pb-3">
            <div>
                <h3 class="float-md-start">Arya Vaziri</h3>
                <nav class="nav navbar-brand nav-masthead justify-content-center float-md-end">
                    <a class="nav-link" href="index.html">Home</a>
                    <a class="nav-link" href="projects.html">Projects</a>
                    <a class="nav-link" aria-current="page" href="contact.php">Contact</a>
                </nav>
            </div>
        </header>

        <main>

            <div class="row col-10 col-lg-8 mx-auto">
                <div class="col-6 py-3 border border-bottom-0 fs-4 rounded-top user-select-none" id="log">Login</div>
                <div class="col-6 py-3 fs-4 border-bottom rounded-top user-select-none" id="reg">Register</div>

                <div class="col-12 px-5 border rounded-bottom border-top-0 py-5" id="log1">
                    <h2 class="mb-5">Login</h2>
                    <form action="" class="row col-12" name="login" onsubmit="return _myAuth1()" method="post">
                        <label class="col-5 fs-5 my-2" for="userName">Username:</label>
                        <input required autofocus class="col-6 fs-5 my-2" type="email" name="userName">
                        <label class="col-5 fs-5 my-2" for="password">Password:</label>
                        <input required id="pass" class="col-6 fs-5 my-2" type="password" name="password">
                        <a id="show" class="col-1 text-light fs-4 pt-1"><i class="bi bi-eye-fill"></i></a>
                        <input hidden type="text" name="state" value="login">

                        <button class="col-3 btn mt-4 fs-4 p-2 btn-success mx-auto">Login</button>
                    </form>
                </div>
                <div class="col-12 py-3 border rounded-bottom border-top-0 d-none" id="reg1">
                    <h2 class="mb-3">Register</h2>
                    <form action="" class="row col-12" name="register" onsubmit="return _myAuth2()" method="post">
                        <label class="col-5 fs-5 my-1" for="username">Username:</label>
                        <input required autofocus class="col-6 fs-5 my-1" type="text" name="username">
                        <span id="username" class="text-danger col-12 text-end px-5"></span>
                        <label class="col-5 fs-5 my-1" for="password1">Password:</label>
                        <input required id="pass1" class="col-6 fs-5 my-1" type="password" name="password1">
                        <a id="show1" class="col-1 text-light fs-4 pt-1"><i class="bi bi-eye-fill"></i></a>
                        <label class="col-5 fs-5 my-1" for="password2">Confirm password:</label>
                        <input required id="pass2" class="col-6 fs-5 my-1" type="password" name="password2">
                        <span id="password" class="text-danger col-12 text-end px-5"></span>
                        <label class="col-5 fs-5 my-1" for="fname">First name:</label>
                        <input required class="col-6 fs-5 my-1" type="text" name="fname">
                        <span id="firstName" class="text-danger col-12 text-end px-5"></span>
                        <label class="col-5 fs-5 my-1" for="lname">Last name:</label>
                        <input required class="col-6 fs-5 my-1" type="text" name="lname">
                        <span id="lastName" class="text-danger col-12 text-end px-5"></span>
                        <label class="col-5 fs-5 my-1" for="mail">Email:</label>
                        <input required class="col-6 fs-5 my-1" type="email" name="mail">
                        <span id="email" class="text-danger col-12 text-end px-5"></span>
                        <label class="col-5 fs-5 my-1" for="lname">Birthday:</label>
                        <input required class="col-6 fs-5 my-1" type="date" name="date">
                        <span id="birthDay" class="text-danger col-12"></span>
                        <label class="col-5 fs-5 my-1" for="sex">Sex:</label>
                        <label class="col-2 fs-5 my-1" for="sex">Male:</label>
                        <input required style="transform:scale(0.7)" class="col-1 my-1" type="radio" name="sex" value="Male">
                        <label class="col-2 fs-5 my-1" for="sex">Female:</label>
                        <input required style="transform:scale(0.7)" class="col-1 my-1" type="radio" name="sex" value="Female">
                        <span id="sex" class="text-danger col-12 text-end px-5"></span>
                        <input hidden type="text" name="state" value="reg">
                        <input class="col-3 btn mt-4 fs-4 p-2 btn-success mx-auto" type="submit" value="Register">
                    </form>
                </div>
            </div>

        </main>
    </div>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>

    <script>
        let shf = 1
        let shf1 = 1
        let shf2 = 1
        document.getElementById("log").addEventListener('click', function() {
            document.getElementById('log1').classList.remove('d-none')
            document.getElementById('reg1').classList.add('d-none')
            document.getElementById('log').classList.remove('border-bottom')
            document.getElementById('log').classList.add('border-bottom-0')
            document.getElementById('log').classList.add('border')
            document.getElementById('reg').classList.remove('border')
            document.getElementById('reg').classList.remove('border-bottom-0')
            document.getElementById('reg').classList.add('border-bottom')
        })
        document.getElementById("reg").addEventListener('click', function() {
            document.getElementById('log1').classList.add('d-none')
            document.getElementById('reg1').classList.remove('d-none')
            document.getElementById('reg').classList.remove('border-bottom')
            document.getElementById('reg').classList.add('border-bottom-0')
            document.getElementById('reg').classList.add('border')
            document.getElementById('log').classList.remove('border')
            document.getElementById('log').classList.remove('border-bottom-0')
            document.getElementById('log').classList.add('border-bottom')
        })
        document.getElementById("show").addEventListener('click', function() {
            if (shf % 2) {
                document.getElementById("pass").setAttribute('type', 'text')
            } else {
                document.getElementById("pass").setAttribute('type', 'password')
            }
            shf++
        })
        document.getElementById("show1").addEventListener('click', function() {
            if (shf1 % 2) {
                document.getElementById("pass1").setAttribute('type', 'text')
                document.getElementById("pass2").setAttribute('type', 'text')
            } else {
                document.getElementById("pass1").setAttribute('type', 'password')
                document.getElementById("pass2").setAttribute('type', 'password')
            }
            shf1++
        })





        function _myAuth1() {
            let flag = 0
            let _userName = document.forms['login']['userName'].value
            let _password = document.forms['login']['password'].value

            if (
                ((_userName.search(/<script/)) != -1) ||
                ((_password.search(/<script/)) != -1)
            ) {
                flag++
                window.close();
            }


            if (
                (((_userName.match(/@/g))) == null) ||
                (((_userName.match(/@/g)).length) != 1) ||
                ((_userName.search(/@/)) < 3) ||
                (((_userName.search(/@/)) + 6) >= (_userName.length)) ||
                (((_userName.indexOf('.', (_userName.search(/@/)))) - 3) <= (_userName.search(/@/)))
            ) {
                flag++
            }

            if (flag != 0) {
                return false
            }

        }

        function _myAuth2() {
            let flag = 0
            let _username = document.forms['register']['username'].value
            let _password1 = document.forms['register']['password1'].value
            let _password2 = document.forms['register']['password2'].value
            let _fname = document.forms['register']['fname'].value
            let _lname = document.forms['register']['lname'].value
            let _mail = document.forms['register']['mail'].value
            let _birthDay = document.forms['register']['date'].value
            let _sex = document.forms['register']['sex'].value

            if (
                ((_username.search(/<script/)) != -1) ||
                ((_password1.search(/<script/)) != -1) ||
                ((_password2.search(/<script/)) != -1) ||
                ((_fname.search(/<script/)) != -1) ||
                ((_lname.search(/<script/)) != -1) ||
                ((_mail.search(/<script/)) != -1) ||
                ((_birthDay.search(/<script/)) != -1) ||
                ((_sex.search(/<script/)) != -1)
            ) {
                flag++
                window.close();
            }
            if (
                ((_username.search(/[~!#$%^&*=<>,{}-]/g)) != -1) ||
                (_username.length < 4) ||
                (_username.length > 20)
            ) {
                document.getElementById('username').innerHTML = 'Please enter correct username'
                flag++
            } else {
                document.getElementById('username').innerHTML = ''
            }
            if (_password1 == _password2) {
                if (
                    ((_password1.search(/[~@_!#$%^&*=<>,{}-]/g)) == -1) ||
                    ((_password1.search(/[A-Z]/)) == -1) ||
                    ((_password1.search(/[0-9]/)) == -1) ||
                    (_password1.length < 8) ||
                    (_password1.length > 20)
                ) {
                    document.getElementById('password').innerHTML = 'Enter password between 8-20 chars including numbers, uppercase, lowercase and special chars.'
                    flag++
                } else {
                    document.getElementById('password').innerHTML = ''
                }
            } else {
                document.getElementById('password').innerHTML = "Password doesn't match."
                flag++
            }

            if (
                (_mail.match(/@/g) == null) ||
                ((_mail.match(/@/g) != null) && ((_mail.match(/@/g).length) != 1)) ||
                ((_mail.search(/@/g)) < 3) ||
                (((_mail.search(/@/)) + 6) >= (_mail.length)) ||
                (((_mail.indexOf('.', (_mail.search(/@/)))) - 3) <= (_mail.search(/@/)))
            ) {
                document.getElementById('email').innerHTML = "Your mail is inccorect"
                flag++
            } else {
                document.getElementById('email').innerHTML = ''
            }
            if (flag != 0) {
                return false
            }
        }
    </script>



    <?php
    $headers = 'from : aaryaa.ir';
    $myMail = 'info@aaryaa.ir';
    if (
        $_SERVER["REQUEST_METHOD"] == "POST"
    ) {
        $state = check($_POST['state']);
        if ($state == "login") {
            $userName = check($_POST['userName']);
            $pass = check($_POST['password']);
        } else {
        }
        $txt = "<h3>This message has been send from</h3>";
        // echo "Username = $userName \nPassword = $pass\n $state";
    }
    function check($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>


</body>

</html>