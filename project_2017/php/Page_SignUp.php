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
                <div class = "signup">
                    <form action = "SignUp_Second.php">
                    <p>ID<input type = "text" name = "id" placeholder="id" class = "text"/></p>
                    <p>PassWord<input type = "password" name = "password" placeholder="password" class = "text"/></p>
                    <input type = "submit" value = "Complete"/>
                    </form>
                        </div>
        </section>
</html>