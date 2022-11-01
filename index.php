<?php
    include "session_start.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library DB</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="responsive.css">
</head>
<body>
    <header>
        <div id="header">
            <div class="logo">
                <img src="images/logo.jpg">
            </div>
            <?php
                if(isset($_SESSION['login_user'])){
                    ?>
                    <div class="content">
                        <ul>
                            <li><a href="index.php" class="on">Home</a></li>
                            <li><a href="books.php">Books</a></li>
                            <li class="logout">Logout</li>
                            <li><a href="feedback.php">FeedBack</a></li>
                        </ul>
                    </div>
                    <?php
                }
            else{
            ?>
                <div class="content">
                    <ul>
                        <li><a href="index.php" class="on">Home</a></li>
                        <li><a href="books.php">Books</a></li>
                        <li><a href="student_login.php">Student_Login</a>
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
            <?php
            }?>
        </div>
    </header>
    <section id="main">
        <div class="main-content">
            <h1>Welcome To the library</h1>
            <h2 class="mid">Opens : 6:00 A.M</h2>
            <h2>Closes : 6:00 P.M</h2>
        </div>
    </section>
    <footer>
        <div id="footer">
            <h1>Need Any help?</h1>
            <h1>Contact us at : librariansupervisor@gmail.com</h1>
        </div>
        <div class="icons">
            <ul>
                <li><i class="fa fa-facebook" style="line-height:10px;"></i></li>
                <li><i class="fa fa-instagram"></i></li>
                <li><i class="fa fa-twitter"></i></li>
                <li><i class="fa fa-vk"></i></li>
            </ul>
        </div>
    </footer>
    <script src="script.js"></script>
    <script>
        const sessionEnd = document.querySelector('.logout')

        function endSession(){
            window.location.href = "session_end.php"
        }
        sessionEnd.addEventListener("click",endSession)
    </script>
</body>
</html>