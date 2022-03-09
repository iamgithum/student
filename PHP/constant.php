<!doctype html>
<html lang=en>
    <head>
        <title>php Constants</title>
        <meta name=keywords content=php>
        <style type=text/css>
            body{
                margin:0px;
                background-color:skyblue;
            }
            h1{
                margin:0px;
                background-color:yellow;
                font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                font-size:81px;
            }
            p{
                text-align:center;
                font-size:36px;
                font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>Php Constants</h1>
        <br>
        <?php
            define("UR2", "1.414",);
            echo "<p>Underroot of 2 is ".UR2."<br>";
            define("SJA","Sare Jaha Se Achha",true);
            echo SJA."<br>";
            define("PHONE",["Androids","iPones","Java"],true);        ## Defining Array
            echo PHONE[0]." ".PHONE[1]." ".PHONE[2]."<br>";
            function ifx(){
                echo "</p><hr><h1 style='text-align:center;'>".SJA."</h1>";
            }
            ifx();
        ?>
    </body>
</html>