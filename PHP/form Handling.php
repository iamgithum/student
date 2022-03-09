<!doctype html>
<html lang=en>
    <head>
        <title>PHP Form Handling</title>
        <meta name=keywords content=php>
        <style>
            body{
                margin:0px;
                background-color:mediumpurple;
                font-size:18px;
                font-family:ubuntu;
                text-align:center;
            }
            h1{
                margin:0px;
                padding:9px;
                font-size:81px;
                font-family:purisa;
                text-decoration: dotted overline underline;
                text-shadow:18px 18px 9px black;
            }
        </style>
    </head>
    <body>
        <h1>Form Handling</h1>
        <form method=post>
            Name: <input type=text name=naam maxlength=15>
            <br> mailid: <input name=mail type=text maxlength=15><br>
            <input type=submit value=submit>
        </form>
        <?php
            echo "Output <br>Name : ".$_POST['naam']."<br>Mail : ".$_POST['mail'];
        ?>
    </body>
</html>