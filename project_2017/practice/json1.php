<!doctype HTML5>

<html>
    <head>
        <meta charset = "utf-8">
    </head>
    <body>
       <?php 
       $timezone = ["Asia/Seoul", "America/New_York"];
       echo implode(',', $timezone);
       echo '<br/>';
       echo implode($timezone);
       ?>
                
    </body>
</html>

