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
        <div class = "bar"><!-- menu bar-->
            <div class = "title">
                <img src = "../source/logo.png" width = 70px height = 35px style = "float: left; background-color: black;">
                <p>MuSik</p>
            </div>
            <div class = "menu">
                <div><a class = "menu_link" href = "../html/Page_Title.php">HomePage</a></div>
                <div><a class = "menu_link" href = "Page_Introduce.php" style = "left: 400px;">Introduce</a></div>
                <div><a class = "menu_link" href = "Page_Upload.php" style = "left: 765px;">Upload</a></div>
            </div>
            <div class = "loginforad">
                <div><a class = "login_link" href = "Page_Login.php" style = "left: 1600px;">Login for admin</a></div>
            </div>
        </div>
        </header>

        <section>
                <div class = "login">
                        <form action = "Login_second.php" method = "POST">
                        <P>ID <input type = "text" name = "id" class = "login_id"/></P>
                        <p>PASSWORD <input type = "password" name = "password" class = "login_pass"/></p>
                        <input type = "submit"/>
                        </form>
                        </div>
        </section>
</html>