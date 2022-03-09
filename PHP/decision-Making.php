<!doctype html>
<html lang=en>
    <head>
        <title>
            Decision Making and Loops
        </title>
        <meta name=keywords contents=php>
        <style type=text/css>
            body{
                margin:0px;
                background-color:magenta;
            }
            h1{
                font-size:81px;
                margin:0px;
                font-family:fredericka;
                text-decoration: overline underline double;
                text-shadow:18px black;
            }
            p{
                font-size:18px;
                text-align:center;
            }
        </style>
    </head>
    <body>
        <h1>Decision Making and Loops</h1><br>
        <hr>
        <?php
            $var="String";
            echo "<p>";
            if($var=="String"){
                print "Condition Tested : True</br>";
            }
            if($var=="False"){
                echo "True</br>";
            }else{
                echo "False</br>";
            }
            if($var=="False"){
                echo "True</br>";
            }elseif($var=="Stri0ng"){
                echo "x:Perfect</br>";
            }else{
                echo "Perfect</br>";
            }
            switch ($var) {
                case "a":{
                    echo "Case a";
                    break;
                }   
                case "b":{
                    echo "Case b";
                    break;
                }
                case "String":{
                    echo "Perfect<br>";
                    break;
                }
                default:{
                    echo "Sorry!....<br>";
                }
            }
            echo "</p>";
        ?>
    </body>
</html>