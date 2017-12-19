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
        <?php
        echo file_get_contents("../source/menu_bar.txt");
          ?>

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
        </header>

        <section style = "top: 300px;">
                <div class = "array_sound">
                        <?php 
                            echo file_get_contents("../source/song".$_GET['id'].".txt");
                        ?>
                        </div>
        </section>
        <!--
        <aside class = "player_sound">
            음악재생 상황 설명
        </aside>

            <footer class = "last">
                종료
            </footer>-->
            </body>
</html>