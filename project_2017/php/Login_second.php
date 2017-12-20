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
                    $befp = fopen('../source/account/'.$i.'.txt', "r");
                    $beid = fgets($befp, 1024);
                    while(!feof($befp)) {
                        $buffer = fgets($befp)."<br>";
                    }
                    $repair_id = chop($beid);
                    $repair_pass = strip_tags($buffer, '<br/>');
                    if(strcmp($id, $repair_id) == 0 && strcmp($password, $repair_pass) == 0) 
                    {
                        fclose($befp);
                        $check = 1;
                        echo "<script>alert(\"어서오세요\");</script>";
                        echo "<script>location.replace('Page_Title.php?id=0');</script>";
                        break;
                    }
                    fclose($befp);
                }
            }

            if($check == 0) {
                echo "<script>alert(\"누구세요\");</script>";
                echo "<script>location.replace('Page_Login.php');</script>";
            }
       ?>
</html>