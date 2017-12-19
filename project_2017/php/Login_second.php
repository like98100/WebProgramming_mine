<html>
    <head>
        <meta charset="utf-8">
        <title>MuSik</title>
        <link href="../css/Design.css" type=text/css rel=stylesheet>
        <link href="../css/Design_Bar.css" type=text/css rel=stylesheet>
    </head>
    <body>
<?php 
            $id = $_GET["id"];
            $password = $_GET["password"];
            $check = 0;
            $dir = "../source/account/";
            if(glob($dir."*.txt") != false) {
                $filecount = count(glob($dir."*.txt"));
                for($i = 1; $i <= $filecount; $i += 1) 
                {   
                    $befile = '../source/account/'.$i.'.txt';
                    $beid = implode(".", $befile);
                    echo $beid[0];
                    if(strcmp($id, $beid[0]) && strcmp($password, $beid[1])) 
                    {
                        echo "<script>alert(\"어서오세요\");</script>";
                        $check = 1;
                        echo "<script>location.replace('Page_Title.php?id=0');</script>";
                    }
                }
            }

            if($check == 0) {
                echo "<script>alert(\"누구세요\");</script>";
                echo "<script>location.replace('Page_Login.php');</script>";
            }
       ?>
</html>