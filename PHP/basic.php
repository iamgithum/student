<!doctype html>
<html lang=en>
    <head>
        <title>Practice Page</title>
        <meta name=keywords content=book>
        <style type=text/css>
            body {
                background-color:lightblue;
                margin:0px;
            }
            h1 {
                background-color:seagreen;
                font-family:'Courier New', Courier, monospace;
                font-size:81px;
                text-decoration: double underline overline;
                text-shadow:12px 12px 15px black;
                margin:0px;
                padding:9px;
                text-align:center;
            }
            p {
                font-size:45px;
                font-style:bold;
                margin:18px;
                text-align: center;
                font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>Practice</h1>
        <?php
            echo "<p>Hello Php";                    // Single Line Comment                  
            $nuq = 45;                              // Number Variable
            $nua = 5;                               ## Single Line Comment
            echo "<br>" . $nuq + $nua ."<br>";      // Number Addition
            $vstr = "String";
            echo "Hello ".$vstr."<br>";             // String Variables
            /*  Multi Line Comment
             *  Arithmatic Operations and Print
             *  + / - / * / / / %
             */
            $vout;
            $x = 5;
            $y = 10;
            print "Add of x and y : ".$x + $y ."<br>";
            print "Difference of x and y : ".$y-$x."<br>";
            print "Product of x and y : ".$x*$y."<br>";
            print "Division of x and y : ".$y/$x."<br>";
            print "Remainder of x and y : ".$y%$x."<br></p>";

            $yarra = array("car","home","code");
            echo "<p>".$yarra[0]."<br>".$yarra[1]."<br>".$yarra[2]."<br></p>";

            class Code {
                public $a, $b;
                public function out($a, $b){
                    return $a + $b;
                }
            }
            $i = new code;
            echo "<p>".$i->out(3,9) ."</p>";
        ?>
    </body>
</html>