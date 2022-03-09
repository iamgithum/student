<!doctype html>
<html lang=en>
    <head>
        <title>SuperGlobals</title>
        <meta name=keywords content=php superglobals>
        <style type=text/css>
            body{
                margin:0px;
                background-color:greenyellow;
                text-align:center;
                font-size:18px;
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            h1{
                background-color:lime;
                margin:0px;
                font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                font-size:81px;
            }
        </style>
    </head>
    <body>
        <h1>SuperGlobals</h1>
        <br>
        <form method=post action="<?php echo $_SERVER['PHP_SELF'];?>">
            <h2>Name</h2>
            <input type=text name=inp maxlength=18>
            <h2>Type</h2>
            <input type=text name=inp0 maxlength=18>
            <input type=submit>
        </form>
        <?php
            $a=6; $b=9;
            function sum(){
                $GLOBALS['x'] = $GLOBALS['a'] + $GLOBALS['b'];
                return $GLOBALS['x'];
            }
            $i = sum();
            echo "Sum : ".$i."<br>";
            echo $_SERVER['SERVER_ADDR']."<br>";       ## Returns IP Address
            ############### $_REQUEST
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                // Collecting DATA
                $var = $_REQUEST['inp'];
                $abc = $_POST['inp0']; 
                if(empty($var)){
                    echo "Empty<br>";
                }else{
                    echo "Output : ".$var."<br>";
                }
                if(empty($abc)){
                    echo "Empty<br>";
                }else{
                    echo "Output0 : ".$abc."<br>";
                }
            }
            
        ?>
    </body>
</html>