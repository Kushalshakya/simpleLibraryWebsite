<?php
    include "session_start.php";
?>
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
    <section class="nb">
        <div id="navbar">
            <div class="content">
                <div class="logo">
                    <h1>Library</h1>
                </div>
                <div class="list">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="books.php">Books</a></li>
                        <li><a href="feedback.php" class="on">FeedBack</a></li>
                    </ul>
                </div>
            </div>
            <?php
                if(isset($_SESSION['login_user'])){
                    ?>
                    <div class="session">
                        <h2 style="cursor:default;"><?php echo "Welcome " . $_SESSION['login_user'];?></h2>
                        <h2><i class="fa fa-sign-out"></i><a href="session_end.php">Logout</a></h2>
                    </div>
                    <?php
                }
                else{
                ?>
                <div class="session">
                    <h2><i class="fa fa-sign-in"></i><a href="student_login.php">Login</a></h2>
                    <h2><i class="fa fa-user"></i><a href="registration.php">Sign Up</a></h2>
                </div>
                <?php  
                }
            ?>
        </div>
    </section>
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
                        else{
                            $display = "SELECT * FROM `feedback` ORDER BY `feedback`.`id` DESC";
                            $connect = mysqli_query($db,$display);
                            echo "<table>";
                                while($dp = mysqli_fetch_assoc($connect)){
                                    echo "<tr>";
                                        echo "<td>"; echo $dp['comment']; echo "</td>";
                                    echo "</tr>";
                                }
                            echo "</table>";
                        }
                    ?>
                </div>
            </form>
        </div>
    </section>
</body>
</html>