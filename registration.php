<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
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
        <section id="registration">
            <div class="registration_base">
                <h1>Library Management System</h1>
                <h1>Student SignUp Form</h1><br>
                <input type="text" placeholder="Username" name="username" autocomplete="off" required spellcheck="false"><br>
                <input type="number" placeholder="RollNo" name="rollno" autocomplete="off"><br>
                <input type="password" placeholder="Password" name="password" autocomplete="off" required spellcheck="false"><br>
                <button name="login" id="login">Register</button>
                <a href="student_login.php">
                    <h2>Already a user? <u>Login</u></h2>
                </a>
            </div>
        </section>
    </form>
    <?php
        $db = mysqli_connect("localhost","root","","weblibrary");

        if(isset($_POST['login'])){
            if(mysqli_query($db, "INSERT INTO `data` VALUES ('$_POST[username]', '$_POST[password]');")){
                header('location:./student_login.php');
                echo '<script>alert("Registration Successful. Please Login")</script>';
            }
        }
    ?>
    <script src="script.js" defer></script>
</body>
</html>