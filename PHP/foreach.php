<!doctype html>
<html lang=en>
    <head>
        <title>
            foreach loop php
        </title>
        <meta name=keywords content=php>
        <style type=text/css>
            body{
                background-color:indigo;
                margin:0px;
            }
            h1{
                margin:0px;
                background-color:tomato;
                font-size:81px;
                font-family:calibri;
                text-decoration:double underline over;
            }
            p{
                text-align:center;
                font-size:21px;
            }
        </style>
    </head>
    <body>
        <h1>Foreachloop PHP</h1>
        <br>
        <?php
            $x = array("top","middle","bottom");
            foreach ($x as $value) {
                echo "<p>" . $value . "<br></p>";
            }
        ?>
    </body>
</html>