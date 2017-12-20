<html>
    <head>
        <meta charset="utf-8">
        <title>MuSik</title>
        <link href="../css/Design.css" type=text/css rel=stylesheet>
        <link href="../css/Design_Bar.css" type=text/css rel=stylesheet>
    </head>
    <body>
<?php 
            $user_id = $_GET["id"];
            $user_password = $_GET["password"];
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
                    if(strcmp($user_id, $repair_id) == 0 && strcmp($user_password, $repair_pass) == 0) 
                    {
                        session_start();
                        $_SESSION['id'] = $user_id;
                        fclose($befp);
                        $check = $i;
                        echo "<form method = \"POST\" action = \"Page_Upload.php\">
                        <input type = \"hidden\" name = \"check\" value = <?php$i?>);";
                        echo "<script>alert(\"로그인에 성공했습니다.\");</script>";
                        echo "<script>location.replace('Page_Title.php?id=0');</script>";
                        break;
                    }
                    fclose($befp);
                }
            }

            

            if($check == 0) {
                echo "<script>alert(\"로그인에 실패했습니다.\");</script>";
                echo "<script>location.replace('Page_Login.php');</script>";
            }
       ?>
       <meta http-equiv="refresh" content="0;url=Page_Title.php?id=0" />
       
</html>