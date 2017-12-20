<html>
    <head>
        <meta charset="utf-8">
        <title>MuSik</title>
        <link href="../css/Design.css" type=text/css rel=stylesheet>
        <link href="../css/Design_Bar.css" type=text/css rel=stylesheet>
        <link href="../css/Design_Upload_Second.css" type=text/css rel=stylesheet>
        
    </head>
    <body>
        <?php 
            echo "upload_second.php file";
            if(isset($_POST['save_audio']) && $_POST['save_audio'] == "Upload")
            {
                $dir = '../music/';
                
                for($i = 0; $i < 12; $i += 1) {
                    $gettag = $_GET[$i];
                    if($gettag == true) {
                        $j = $i+1;
                        $file = fopen('../source/song'.$j.'.txt', "w");
                        while(!feof($file)) $doc_data = fgets($file);
                        file_put_contents($file, $doc_data."<p class = \"music\">&nbsp;".$_FILES['audio']['name']." <audio src = \"../music/".$_FILES['audio']['name'].".mp3\" controls loop class = \"player\">NULL</audio></p>
                        <hr class = \"line\" /> <br />");
                        fclose($file);
                    }
                }
                $file = fopen('../source/song0.txt', "r");
                        while(!feof($file)) $doc_data = fgets($file);
                        file_put_contents($file, $doc_data."<p class = \"music\">&nbsp;".$_FILES['audio']['name']." <audio src = \"../music/".$_FILES['audio']['name'].".mp3\" controls loop class = \"player\">NULL</audio></p>
                        <hr class = \"line\" /> <br />");
                        fclose($file);
                $audio_path = $dir.basename($_FILES['audio']['name']);

                if(move_uploaded_file($_FILES['audio']['tmp_name'], $audio_path))
                {
                    echo 'uploaded successfully';
                    echo "<script>alert(\"업로드에 성공했습니다.\");</script>";
                        echo "<script>location.replace('Page_Title.php?id=0');</script>";
                }
                else {
                    echo "<script>alert(\"업로드 도중 오류가 발생했습니다.\");</script>";
                        echo "<script>location.replace('Page_Upload.php');</script>";
                }
            }
            else  {
                echo "<script>alert(\"업로드 도중 오류가 발생했습니다.\");</script>";
                    echo "<script>location.replace('Page_Upload.php');</script>";
            }
        ?>
    </body>    
</html>