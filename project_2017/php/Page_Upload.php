<html>
    <head>
        <meta charset="utf-8">
        <title>MuSik</title>
        <link href="../css/Design.css" type=text/css rel=stylesheet>
        <link href="../css/Design_Bar.css" type=text/css rel=stylesheet>
        <link href="../css/Design_Upload.css" type=text/css rel=stylesheet>
    </head>
    <body>
        <header>
         <?php
             echo file_get_contents("../source/menu_bar.txt");
        ?>
        </header>

        <section>
                <div class = "upload">
                        <fieldset>
                            <legend>MuSik_UpLoad</legend>
                            <p>태그를 선택해주세요</p><br>
                            <input type = "checkbox" name = "tag" value = "1" class = "check"/>Rock
                            <input type = "checkbox" name = "tag" value = "2" class = "check"/>Classical
                            <input type = "checkbox" name = "tag" value = "3" class = "check"/>Jazz
                            <input type = "checkbox" name = "tag" value = "4" class = "check"/>Pop <br>
                            <input type = "checkbox" name = "tag" value = "5" class = "check"/>Ballad
                            <input type = "checkbox" name = "tag" value = "6" class = "check"/>Hiphop
                            <input type = "checkbox" name = "tag" value = "7" class = "check"/>Elec
                            <input type = "checkbox" name = "tag" value = "8" class = "check"/>RnB <br>
                            <input type = "checkbox" name = "tag" value = "9" class = "check"/>Game
                            <input type = "checkbox" name = "tag" value = "10" class = "check"/>Drama
                            <input type = "checkbox" name = "tag" value = "11" class = "check"/>Movie
                            <input type = "checkbox" name = "tag" value = "12" class = "check"/>ETC <br>
                            <br/>
                            <form enctype = "multipart/form-data" action = "Upload_Second.php" method = "post">
                            <input type = "file" name = "music"/>
                            <input type = "submit" value = "Upload" class = "button"/>
                            </form>

                        </fieldset>
                </div>
        </section>
</html>