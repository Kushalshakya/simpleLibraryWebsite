<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student_Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div id="header">
            <div class="logo">
                <img src="images/logo.jpg">
            </div>
            <div class="content">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="">Books</a></li>
                    <li><a href="student_login.php" class="on">Student_Login</a>
                        <ul>
                            <li>
                                <a href="registration.php">
                                    Create Account
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="">Admin_login</a></li>
                    <li><a href="">FeedBack</a></li>
                </ul>
            </div>
        </div>
    </header>
    <form action="" method="post">
        <section id="student_login">
            <div class="login_base">
                <h1>Library Management System</h1>
                <h1>Student Login Form</h1><br>
                <input type="text" placeholder="Username" name="username" autocomplete="off" required spellcheck="false"><br>
                <input type="password" placeholder="Password" name="password" autocomplete="off" required spellcheck="false"><br>
                <button name="login">Login</button>
                <a href="#">
                    <h2>Forget Password?</h2>
                </a>
                <a href="registration.php">
                    <h2>New to the website <u>SignUp</u></h2>
                </a>
            </div>
        </section>
    </form>
</body>
</html>