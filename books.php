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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
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
                    <li><a href="books.php" class="on">Books</a></li>
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
        </div>
    </header>
    <section id="books">
        <form action="" method="post">
            <div class="book_search">
                <input type="search" placeholder="Search For Books" autocomplete="off" spellcheck="false" name="book_search">
                <button name="search_box">Search</button>
            </div>
        </form>
            <!-- include "connection.php";
            if(isset($_POST['search_box'])){
                $book = mysqli_query($db,"SELECT * FROM `books` WHERE bid='$_POST(book_search)';");
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
                while($display = mysqli_fetch_assoc($book)){
                    echo "<tr>";
                        echo "<td>"; echo $display['bid']; echo "</td>";
                        echo "<td>"; echo $display['name']; echo "</td>";
                        echo "<td>"; echo $display['authors']; echo "</td>";
                        echo "<td>"; echo $display['edition']; echo "</td>";
                        echo "<td>"; echo $display['status']; echo "</td>";
                        echo "<td>"; echo $display['quantity']; echo "</td>";
                        echo "<td>"; echo $display['department']; echo "</td>";
                    echo "</tr>";
                }
            } -->
        <h1>List of Books</h1>
        <?php
            include "connection.php";
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
        ?>
    </section>
    <!-- bid, name, authors, edition, status, quantity, department -->
</body>
</html>