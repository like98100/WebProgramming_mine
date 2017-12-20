<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>MuSik</title>
        <link href="../css/Design.css" type=text/css rel=stylesheet>
        <link href="../css/Design_Bar.css" type=text/css rel=stylesheet>
        <link href="../css/Design_Login.css" type=text/css rel=stylesheet>
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
        
        <script>
            function toSignUp() {
                location.href = "Page_SignUp.php";
            }
        </script>
        </header>


        <section class = "section_login" style = "    display : flex;
                flex-direction : column;
                justify-content : flex-start;
                flex-wrap : wrap;
                align-items : center;
                align-content : flex-start;
                text-align: center;
                height: auto;
                padding: 5px 30px;
                text-align: left;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                background-color: #222;
                width: 800px;
                font-size: 2.1em;
                left: 25%;
                top: 33%;
                padding: 0;">
                <div class = "login">
                    <p id = "text" style = "text-decoration: none;
                     font-size: 2.1em;
                     font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                     padding-bottom: 20px;">Log In</p>
                        <?php if(!isset($_SESSION['id'])) { ?>
                            <form action = "Login_second.php">
                        <p>
                            ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type = "text" name = "id" class = "text" placeholder = "id"
                            style = "color: black; background-color: white;"/>
                        </p>
                        <p>
                            Pass&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            <input type = "password" name = "password" class = "text" placeholder = "password"
                            style = "color: black; background-color: white;"/>
                        </p>
                        <div style = " height:30px;"></div>
                        <input type = "submit" value = "Login" class = "button"/>
                        <input type = "button" value = "Sign Up" onclick = 'toSignUp()' class = "button"/>
                        </form>
                        <?php } else {
                            $user_id = $_SESSION['id'];
                            echo "<script>alert(\"이미 로그인하고 있습니다.\");</script>";
                            echo "<script>location.replace('Page_Title.php?id=0');</script>";
                            
                        } ?>
                        
                        </div>
        </section>
        </body>
</html>