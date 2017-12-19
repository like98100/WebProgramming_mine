<html>
    <head>
        <meta charset="utf-8">
        <title>MuSik</title>
        <link href="../css/Design.css" type=text/css rel=stylesheet>
        <link href="../css/Design_Bar.css" type=text/css rel=stylesheet>
        <link href="../css/Design_Login.css" type=text/css rel=stylesheet>
    </head>
    <body>
<?php 
            $id = $_GET["id"];
            $password = $_GET["password"];
            if($id == "like98100" && $password == "1111") {
                echo "<script>alert(\"어서오세요 관리자님\");</script>";
                echo "<script>location.replace('../html/Page_Title.html');</script>";
            } else {
                echo "<script>alert(\"누구세요\");</script>";
                echo "<script>location.replace('Page_Login.php');</script>";
            }
       ?>
</html>