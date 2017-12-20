<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>MuSik</title>
        <link href="../css/Design.css" type=text/css rel=stylesheet>
        <link href="../css/Design_Bar.css" type=text/css rel=stylesheet>
        <link href="../css/Design_Upload.css" type=text/css rel=stylesheet>
    </head>
    <body>
    <?php
        if(!isset($_SESSION['id'])) {
            echo "<script>alert(\"로그인 후 이용해 주십시오.\");</script>";
                        echo "<script>location.replace('Page_Login.php');</script>";
        }
    ?>
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

        <section class = "upload">
                <!-- <div class = "upload_bar">
                    <div id = "num" class = "text">Num</div>
                    <div id = "title" class = "text">Title</div>
                    <div id = "author" class = "text">Author</div>
                    <div id = "date" class = "text">Date</div>
                </div>
                <div class =  "write_button">
                    <a href = "Upload_Second.php">업로드</a>
                </div> -->
                <form method = "POST" action = "Upload_Second.php" enctype = "multipart/form-data">
                <h1>#Tag</h1><br/><br/><br/>
                <input type = "checkbox" name = "1" value = "Rock" class = "check">Rock
                <input type = "checkbox" name = "2" value = "Classical" class = "check">Classical
                <input type = "checkbox" name = "3" value = "Jazz" class = "check">Jazz
                <input type = "checkbox" name = "4" value = "Pop" class = "check">Pop <br>
                <input type = "checkbox" name = "5" value = "Ballad" class = "check">Ballad
                <input type = "checkbox" name = "6" value = "Hiphop" class = "check">Hiphop
                <input type = "checkbox" name = "7" value = "Elec" class = "check">Elec
                <input type = "checkbox" name = "8" value = "RnB" class = "check">RnB <br>
                <input type = "checkbox" name = "9" value = "Game" class = "check">Game
                <input type = "checkbox" name = "10" value = "Drama" class = "check">Drama
                <input type = "checkbox" name = "11" value = "Movie" class = "check">Movie
                <input type = "checkbox" name = "12" value = "ETC" class = "check">ETC <br>
                <br/><br/>
                <h1>#File</h1><br/><br/><br/>
                <input type = "file" name = "audio" class = "button"/>
                <input type = "submit" value = "Upload" name = "save_audio" class = "button"/>
                </form>
        </section>
</html>