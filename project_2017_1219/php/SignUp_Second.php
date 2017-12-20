<html>
    <head>
        <meta charset="utf-8">
        <title>MuSik</title>
        <link href="../css/Design.css" type=text/css rel=stylesheet>
        <link href="../css/Design_Bar.css" type=text/css rel=stylesheet>
    </head>
    <body>
                <?php
                    $id = $_GET['id'];
                    $pass = $_GET['password'];
                    $check = 0;
                    $dir = "../source/account/";
                    if(glob($dir."*.txt") != false) {
                        $filecount = count(glob($dir."*.txt"));
                        for($i = 1; $i <= $filecount; $i += 1) 
                        {   
                            $befile = '../source/account/'.$i.'.txt';
                            $beid = implode(".", $befile);
                            $check_arr = strcmp($id, $beid[0]);
                            if(!$check_arr) 
                            {
                                echo "<script>alert(\"이미 존재하는 계정입니다.\");</script>";
                                $check = 1;
                                echo "<script>location.replace('Page_Title.php?id=0');</script>";
                            }
                        }
                    }
                    if($check == 0)
                    {
                        $filecount += 1;
                        $idfile = '../source/account/'.$filecount.'.txt';
                        file_put_contents($idfile, $id.".".$pass);
    
                        echo "<script>alert(\"회원가입이 완료되었습니다.\");</script>";
                        echo "<script>location.replace('Page_Title.php?id=0');</script>";
                    }
                ?>            
</html>