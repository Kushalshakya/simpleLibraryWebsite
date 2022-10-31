<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    *{
        margin : 0;
        padding : 0;
    }
    html{
        font-size : 62.5%;
    }
    .nb{
        background-color : rgba(0,0,0,0.6);
        color : rgba(255, 255, 255, 0.808);
    }
    #navbar{
        width : 90%;
        margin : auto;
        display : flex;
        justify-content : space-between;
        font-family : 'Roboto', sans-serif;
        align-items: center;
        height : 10vh;
    }
    #navbar .content{
        display : flex;
        flex-direction : row;
        align-items : center;
    }
    #navbar .list{
        margin-left : 40px;
    }
    #navbar .list ul{
        list-style : none;
        display : flex;
        gap : 20px;
        flex-direction : row;
        font-size : 1.5rem;
        font-weight : 600;      
    }
    #navbar .list ul li{
        cursor : pointer;
    }
    #navbar .session{
        text-transform : uppercase;
        display : flex;
        flex-direction: row;
        gap : 25px;
    }
    #navbar i{
        margin-right : 10px;
    }
    #navbar .content{
        text-transform : uppercase;
    }
    #navbar h1{
        font-size : 3rem;
    }
    #navbar .session h2{
        cursor : pointer;
    }
    @media (max-width : 998px){
        html{
            font-size : 50%;
        }
    }
    @media (max-width : 650px){
        html{
            font-size : 40.625%;
        }
    }
    @media (max-width : 550px){
        #navbar .session{
            display : none;
        }
    }
    #navbar a{
        color : rgba(255, 255, 255, 0.808);
        text-decoration : none;
    }
</style>
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
                        <li><a href="feedback.php">FeedBack</a></li>
                    </ul>
                </div>
            </div>
            <div class="session">
                <h2><i class="fa fa-sign-in"></i>Login</h2>
                <h2><i class="fa fa-sign-out"></i>Logout</h2>
                <h2><i class="fa fa-user"></i>Sign Up</h2>
            </div>
        </div>
    </section>
</body>
</html>