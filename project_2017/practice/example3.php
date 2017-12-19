<html>
    <body>
        <?php
            $a = 1;
            echo $a+1; #2
            echo "<br />";
            $a = 2;
            print $a+1; #3 #echo == print
            
            echo "<br />";
            $first = "coding";
            echo $first." everyone";
            
            echo "<br />";
            $b = 100;
            $b = $b + 10;
            print $b.'<br />';
            $b = $b / 10;
            print $b.'<br />';
            $b = $b - 10;
            print $b.'<br />';
            $b = $b * 10;
            print $b.'<br />';
            
            echo "<br />";
            define('Title', 'PHP Tutorial');
            echo Title;
            define('Title', 'Java Tutorial');
            
            echo "<br />";
            $a = 100;
            echo gettype($a);
            settype($a, 'double');
            echo "<br />";
            echo gettype($a);
            #is_array, is_bool 등도 비슷한 역할을 하는 API

            #$a = 100;
            #$a = "test";
            #$a = array(1,2,3);
            #셋 다 문제 없다
            echo "<br />";
            echo "<br />";
            $title = "subject";
            $$title = "PHP Tutorial";
            echo $subject
            #$title = "subject";
            #$$title == $subject = "PHP Tutorial";
        ?>
    </body>
</html>

