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
                <span><a class = "menu_link" href = "../html/Page_Title.html">HomePage</a></span>
                <span><a class = "menu_link" href = "Page_Introduce.php">Introduce</a></span>
                <span><a class = "menu_link" href = "Page_Upload.php">Upload</a></span>
                <span class = "loginforad">
                     <span><a class = "login_link" href = "Page_Login.php">Login for admin</a></span>
                </span>
            </div>
        </div>
        </header>

        <section>
                <div class = "login">
                        <form action = "Login_second.php">
                        <P>ID <input type = "text" name = "id" class = "login_id"/></P>
                        <p>PASSWORD <input type = "password" name = "password" class = "login_pass"/></p>
                        <input type = "submit"/>
                        </form>
                        </div>
        </section>
</html>