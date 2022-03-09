<!doctype html>
<html lang=en>
    <head>
        <title>
            php-math
        </title>
        <meta name=keywords contents=php>
        <style type=text/css>
            body{
                margin:0px;
                background-color:violet;
            }
            h1{
                margin:0px;
                font-size:81px;
                font-family:'Courier New', Courier, monospace;
                text-decoration:underline;
                text-shadow: 18px 18px 18px black;
            }
            p{
                font-size:21px;
                margin:0px;
                text-align:center;
            }
        </style>
    </head>
    <body>
        <h1>Math-PHP</h1>
        <hr style="padding:18px;background-color:red;border-color:yellow;border-style:double;">
        <?php
            echo "<p>".pi()."<br>";
            echo "Minimum value : ".min(-1,14,15,-21,-1996)."<br>";
            echo "Maximum Value : ".max(9,-18,27,-36,45)."<br>";
            echo "Absolute Value : ".abs(-45.45)."<br>";
            echo "Square root : ".sqrt(144)."<br>";
            echo "Round Figure : ".round(1.8)."<br>";
            echo "Random Number : ".rand()."<br>";
        ?>
    </body>
</html>