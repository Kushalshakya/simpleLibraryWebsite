<?php
    include "session_start.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <li><a href="books.php" class="on">Books</a></li>
                        <li><a href="feedback.php">FeedBack</a></li>
                    </ul>
                </div>
            </div>
            <?php
                if(isset($_SESSION['login_user'])){
                    ?>
                    <div class="session">
                        <h2><?php echo "Welcome " . $_SESSION['login_user'];?></h2>
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
    <section id="books">
        <form action="" method="post">
            <div class="book_search">
                <input type="search" placeholder="Search For Books" autocomplete="off" spellcheck="false" name="book_search">
                <button name="search_box" style="cursor:pointer;">Search</button>
            </div>
        </form>
        <h1>List of Books</h1>
        <?php
            include "connection.php";

            if(isset($_POST['search_box'])){
                $search = mysqli_query($db,"SELECT * FROM `books` WHERE name LIKE '%$_POST[book_search]%' ");
                if(mysqli_num_rows($search) == 0){
                    echo "Sorry! No book found. Try searching again";
                }
                else{
                    echo "<table>";
                        echo "<tr style='background-color:white'>";
                            echo "<th>"; echo"BID"; echo"</th>";
                            echo "<th>"; echo"Name"; echo"</th>";
                            echo "<th>"; echo"Authors"; echo"</th>";
                            echo "<th>"; echo"Edition"; echo"</th>";
                            echo "<th>"; echo"Status"; echo"</th>";
                            echo "<th>"; echo"Quantity"; echo"</th>";
                            echo "<th>"; echo"Department"; echo"</th>";
                        echo"</tr>";
                    while($rows = mysqli_fetch_assoc($search)){
                        echo "<tr>";
                            echo "<td>"; echo $rows['bid']; echo "</td>";
                            echo "<td>"; echo $rows['name']; echo "</td>";
                            echo "<td>"; echo $rows['authors']; echo "</td>";
                            echo "<td>"; echo $rows['edition']; echo "</td>";
                            echo "<td>"; echo $rows['status']; echo "</td>";
                            echo "<td>"; echo $rows['quantity']; echo "</td>";
                            echo "<td>"; echo $rows['department']; echo "</td>";
                        echo "</tr>";
                    }
                    echo"</table>";    
                }
            }
        else{
            $res = mysqli_query($db,"SELECT * FROM `books` ORDER BY `books`.`name` ASC;");
            echo "<table>";
            echo "<tr style='background-color:white'>";
                echo "<th>"; echo"BID"; echo"</th>";
                echo "<th>"; echo"Name"; echo"</th>";
                echo "<th>"; echo"Authors"; echo"</th>";
                echo "<th>"; echo"Edition"; echo"</th>";
                echo "<th>"; echo"Status"; echo"</th>";
                echo "<th>"; echo"Quantity"; echo"</th>";
                echo "<th>"; echo"Department"; echo"</th>";
            echo"</tr>";
            while($rows = mysqli_fetch_assoc($res)){
                echo "<tr>";
                    echo "<td>"; echo $rows['bid']; echo "</td>";
                    echo "<td>"; echo $rows['name']; echo "</td>";
                    echo "<td>"; echo $rows['authors']; echo "</td>";
                    echo "<td>"; echo $rows['edition']; echo "</td>";
                    echo "<td>"; echo $rows['status']; echo "</td>";
                    echo "<td>"; echo $rows['quantity']; echo "</td>";
                    echo "<td>"; echo $rows['department']; echo "</td>";
                echo "</tr>";
            }
            echo"</table>";
        }
        ?>
    </section>
</body>
</html>