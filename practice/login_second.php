<!doctype HTML5>

<html>
    <head>
        <meta charset = "utf-8">
    </head>
    <body>
       <?php 
            $password = $_GET["password"];
            if($password == "1111") {
                echo "환영합니다.";
            } else {
                echo "누구세요.";
            }
       ?>
                
    </body>
</html>

