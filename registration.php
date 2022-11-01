<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="icon" href="logo.jpg">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
</head>
<body>
    <?php
        include "navbar_signup.php";
    ?>
    <form action="" method="post">
        <section id="registration">
            <div class="registration_base">
                <h1>Library Management System</h1>
                <h1>Student SignUp Form</h1><br>
                <input type="text" placeholder="Badge ID" name="badgeid" autocomplete="off" required spellcheck="false"><br>
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
        include "connection.php";
        if(isset($_POST['login'])){
            if(mysqli_query($db, "INSERT INTO `data` VALUES ('$_POST[badgeid]','$_POST[username]', '$_POST[password]');")){
                echo '<script>alert("Registration Successful. Please Login")</script>';
                echo "<script> window.location.href = 'student_login.php' </script>";
                // header("location:student_login.php");
            }
        }
    ?>
    <script src="script.js" defer></script>
</body>
</html>