<html>
    <head>
        <meta charset="utf-8">
        <title>MuSik</title>
        <link href="../css/Design.css" type=text/css rel=stylesheet>
        <link href="../css/Design_Bar.css" type=text/css rel=stylesheet>
        <link href="../css/Design_Upload.css" type=text/css rel=stylesheet>
    </head>
    <body>
        
        <?php
        ini_set("display_errors", "1");
        $uploaddir = '../music/';
        $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
        echo '<pre>';
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
            echo "파일이 유효하고, 성공적으로 업로드 되었습니다.\n";
        } else {
            print "파일 업로드 공격의 가능성이 있습니다!\n";
        }
        echo '자세한 디버깅 정보입니다:';
        print_r($_FILES);
        print "</pre>";
        ?>
</html>