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
            $source = $_FILES['music']['tmp_name'];
            $arr = "../music/".basename($_FILES['music']['name']);

            move_uploaded_file($source, $arr);
            echo "<script>alert(\"업로드가 완료되었습니다.\");</script>";
            echo "<script>location.replace('Page_Title.php?id=0');</script>";
        ?>
</html>