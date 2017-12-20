<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>MuSik</title>
        <link href="../css/Design.css" type=text/css rel=stylesheet>
        <link href="../css/Design_Bar.css" type=text/css rel=stylesheet>
        <link href="../css/Design_Main.css" type=text/css rel=stylesheet>
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
        
        <div class = "submenu">
        <div class = "submenu_tag">
                <a class = "submenu_link" href = "?id=1">Rock</a>
                <a class = "submenu_link" href = "?id=2" style = "left: 275px;">Classical</a>
                <a class = "submenu_link" href = "?id=3" style = "left: 550px;">Jazz</a>
                <a class = "submenu_link" href = "?id=4" style = "left: 825px;">Pop</a>
        </div>
        <div class = "submenu_tag" style = "top: 175px;">
                <a class = "submenu_link" href = "?id=5">Ballad</a>
                <a class = "submenu_link" href = "?id=6" style = "left: 275px;">Hiphop</a>
                <a class = "submenu_link" href = "?id=7" style = "left: 550px;">Elec</a>
                <a class = "submenu_link" href = "?id=8" style = "left: 825px;">RnB</a>
        </div>
        <div class = "submenu_tag" style = "top: 222px;">
                <a class = "submenu_link" href = "?id=9">Game</a>
                <a class = "submenu_link" href = "?id=10" style = "left: 275px;">Drama</a>
                <a class = "submenu_link" href = "?id=11" style = "left: 550px;">Movie</a>
                <a class = "submenu_link"href = "?id=12" style = "left: 825px;">ETC</a>
        </div>
        </div>
        </header>

        <section style = "top: 300px; z-index: 0;">
                <div class = "array_sound">
                        <?php 
                            echo file_get_contents("../source/song".$_GET['id'].".txt");
                        ?>
                        </div>     
        </section>
            </body>
</html>