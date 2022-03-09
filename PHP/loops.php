<!doctype html>
<html lang=en>
    <head>
        <title>Loops</title>
        <meta name=keywords content=php-loops>
        <style type=text/css>
            body{
                margin:0px;
                background-color:yellow;
            }
            h1{
                margin:0px;
                background-color:skyblue;
                font-family:purisa;
                text-decoration:overline underline double;
                padding:6px;
                text-shadow:18px 18px 21px black;
            }
            p{
                font-family:ubuntu;
                font-size:18px;
                text-align:center;
            }
        </style>

    </head>
    <body>
        <h1>Loops</h1>
        <br>
        <?php
            echo "<p>";
            $var = 0;
            while ($var < 5){
                $var++;
                echo "Variable : ".$var."<br>";
            }
            do{
                echo "Section do on pre var.<br>";
            }while($var < 5);
            for($i=0;$i<5;$i++){
                echo "For Loop : ".$i."<br>";
            }
            echo "</p>"
        ?>
    </body>
</html>