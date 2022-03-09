<!doctype html>
<html lang=en>
    <head>
        <title>PHP Array</title>
        <meta name=keywords content=php>
        <style type=text/css>
            body{
                margin:0px;
                background-color:skyblue;
                text-align:center;
                font-size:18px;
                font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
            h1{
                background-color: Orange;
                margin:0px;
                font-family:ubuntu;
                font-size:81px;
                padding:18px;
            }
        </style>
    </head>
    <body>
        <h1>Arrays in PHP</h1>
        <?php
            function fetch($a){
                foreach($a as $val){
                    echo "$val<br>";
                }
            }
            $ary = array("Stairs","Cover","Room","Front");
            sort($ary);fetch($ary);rsort($ary);fetch($ary);
            echo "Indexed Arrays<br>";
            echo "Count Function : ".count($ary)."<br><br>Associative Arrays<br>";
            $aary = array("One"=>"1","Two"=>"2","Three"=>"3");
            foreach($aary as $Key => $Keyval){
                echo "Key : ".$Key." Value : ".$Keyval." <br>";
            }
            echo "<br>Multidimentional Array<br>";
            $mary = array(array("S.no.","Item","Cost"),array(1,"Toy",235),array(2,"Groceries",1996),array(3,"Bills",1500));
            for($i=0;$i<=count($mary)-1;$i++){
                for($j=0;$j<=2;$j++){
                    echo $mary[$i][$j]." | ";
                }
                echo "<br>";
            }
            echo "Array inBuilt Functions<br>";
            
        ?>
    </body>
</html>