<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>MuSik</title>
        <link href="../css/Design.css" type=text/css rel=stylesheet>
        <link href="../css/Design_Bar.css" type=text/css rel=stylesheet>
        <link href="../css/Design_SignUp.css" type=text/css rel=stylesheet>
    </head>
    <body> 
        <header>        
        <main_me>
            <tit class = "container">
            <a href = "../html/Page_Start.html">
                <img src = "../source/logo.png" width = 37px height = 30px style = "background-color: black;"/>
                
            </a>
            <p>MuSik</p>
            </tit>
            <div class = "menu">
                <a href = "Page_Title.php?id=0">HomePage</a>
            </div>
            <div class = "menu">
                <a href = "Page_Introduce.php">Introduce</a>
            </div>
            <div class = "menu">
                <a href = "Page_Upload.php">Upload</a>
            </div>
            </div>
            <div class = "menu">
                    <?php
                    if(!isset($_SESSION['id'])) {
                            echo "<a href = \"Page_Login.php\">Login</a>";
                    } else {
                            $user_id = $_SESSION['id'];
                            echo "<p style = \"background-color: black;\">$user_id</p>";
                            echo "<a href=\"Logout.php\">Logout</a></p>";
                    }
                    ?>
            </div>
            </main_me>
        </header>


        <section>
                <div class = "signup">
                    <p id = "text">Sign up</p>
                    <form action = "SignUp_Second.php">
                    <p>ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type = "text" name = "id" placeholder="id" class = "text"/>
                    </p>
                    <p>Pass&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type = "password" name = "password" placeholder="password" class = "text"/>
                    </p>
                    <div style = " height:30px;"></div>
                    <input type = "submit" value = "Complete" class = "button"/>
                    </form>
                        </div>
        </section>
</html>