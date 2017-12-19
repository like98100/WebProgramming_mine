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
        <?php
            echo file_get_contents("../source/menu_bar.txt");
        ?>
        
        <script>
            function toSignUp() {
                location.href = "Page_SignUp.php";
            }
        </script>
        </header>


        <section>
                <div class = "login">
                        <form action = "Login_second.php">
                        <P>ID <input type = "text" name = "id" class = "login_id" placeholder = "ID"/></P>
                        <p>PASSWORD <input type = "password" name = "password" class = "login_pass" placeholder = "PASSWORD"/></p>
                        <input type = "submit" value = "Login" class = "button"/>
                        <input type = "button" value = "Sign Up" onclick = 'toSignUp()'/>
                        </form>
                        </div>
        </section>
</html>