<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>MuSik</title>
        <link href="../css/Design.css" type=text/css rel=stylesheet>
        <link href="../css/Design_Bar.css" type=text/css rel=stylesheet>
        <link href="../css/Design_Introduce.css" type=text/css rel=stylesheet>
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
                <div class = "introduce">
                        <p class = "title_introduce"><img src = "../source/logo.png" width = 70px height = 50px >MuSik</p>
                        <hr/>
                        <p>MuSik은 음악 파일을 저장해서 자유롭게 감상 및 소장하기 위해  2017년 12월 21일에 제작된 페이지입니다.</p>
                        <p>원하시는 음악을 들을 수 있으며, 다운로드 역시 가능합니다.</p>
                        <p>로그인 기능은 MuSik 페이지의 추가 기능을 이용할 수 있도록 만든 기능입니다.</p>
                        <p>업로드 기능을 사용하여 자신이 원하는 음악의 정보를 기입 후 항목에 추가할 수 있습니다.</p>
                        <p>업로드 기능은 로그인을 이용한 사용자에게만 허용되며 익명의 사용자는 제한됩니다.</p>
                        <p>12개의 태그를 클릭하여 자신이 원하는 음악을 더 빠르게 찾을 수 있습니다.</p>
                        <P>제작자 E-Mail : like98100@naver.com</p>
                        </div>
        </section>
</html>