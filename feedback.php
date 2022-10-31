<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeedBack Page</title>
    <link rel="icon" href="logo.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
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
                    <li><a href="feedback.php"  class="on">FeedBack</a></li>
                </ul>
            </div>
        </div>
    </header>
    <section id="feedback">
        <div class="feedback_base">
            <form action="" method="post">
                <h1>Give Us a Feedback</h1>
                <textarea name="comment" placeholder="Write Something ..." required spellcheck="off" autocomplete="false"></textarea>
                <button name="comment_btn">Comment</button>
                <div class="scroll">
                    <?php
                        include "connection.php";
                        if(isset($_POST['comment_btn'])){
                            $sql = "INSERT INTO `feedback` VALUES ('','$_POST[comment]');";
                            if(mysqli_query($db,$sql)){
                                $cmt = "SELECT * FROM `feedback` ORDER BY `feedback`.`id` DESC";
                                $res = mysqli_query($db,$cmt);
                                echo "<table>";
                                while($row = mysqli_fetch_assoc($res)){
                                    echo "<tr>";
                                        echo "<td>"; echo $row['comment']; echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                            }
                        }
                        $display = "SELECT * FROM `feedback` ORDER BY `feedback`.`id` DESC";
                        $connect = mysqli_query($db,$display);
                        echo "<table>";
                            while($dp = mysqli_fetch_assoc($connect)){
                                echo "<tr>";
                                    echo "<td>"; echo $dp['comment']; echo "</td>";
                                echo "</tr>";
                            }
                        echo "</table>";
                    ?>
                </div>
            </form>
        </div>
    </section>
</body>
</html>