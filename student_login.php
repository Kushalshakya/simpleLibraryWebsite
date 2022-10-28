<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student_Login Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo.jpg">
    <link rel="stylesheet" href="responsive.css">
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
                    <li><a href="books.php">Books</a></li>
                    <li><a href="student_login.php" class="on">Student_Login</a>
                        <ul>
                            <li>
                                <a href="registration.php">
                                    Create Account
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="admin_login.php">Admin_login</a></li>
                    <li><a href="feedback.php">FeedBack</a></li>
                </ul>
            </div>
        </div>
    </header>
    <form action="" method="post">
        <section id="student_login">
            <div class="login_base">
                <h1>Library Management System</h1>
                <h1>Student Login Form</h1><br>
                <input type="text" placeholder="Badge ID" name="badgeid" autocomplete="off" required spellcheck="false"><br>
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
    <?php
        include "connection.php";
        if(isset($_POST['login'])){
            $count = 0;
            $res = mysqli_query($db, "SELECT * FROM `data` WHERE badgeid='$_POST[badgeid]' && username='$_POST[username]' && password='$_POST[password]';");
            $count = mysqli_num_rows($res);
            if($count == 0){
            echo'<script>alert("Login Credentials Doesnot match.")</script>';
            }
            else{
                if($res){
                    header('location:./index.php');
                    echo '<script>alert("Login Successful")</script>';
                }
            }
        }
    ?>
</body>
</html>