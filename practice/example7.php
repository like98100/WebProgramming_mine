<?php


    $befp = fopen('../source/account/1'.'.txt', "r");
    $beid = fgets($befp, 1024);

    echo $beid;    
    fclose($befp);
    $befp = fopen('../source/account/1'.'.txt', "r");
    while(!feof($befp)) {
        $buffer = fgets($befp)."<br>";
    }
    echo $buffer;
    fclose($befp);

    echo $buffer; echo $beid;
    echo var_dump($buffer);
    echo var_dump($beid);

    $id_repair = chop($beid);
    $pass_repair = chop($buffer);
    echo $id_repair; echo $pass_repair;
    echo var_dump($id_repair); echo var_dump($pass_repair);
    echo $pass_repair; echo $id_repair;

    $pass_repair = strip_tags($buffer, '<br/>');
    echo "pass";
    echo var_dump($pass_repair);
    ?>