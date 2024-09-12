<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <p>teste</p>

    <?php
    print("<h1>Hello Word<br></h1>");
    $var=10;
    $var2=20;
    $soma= $var+$var2;

    echo "<p>$soma</p>";

    echo "<ul>";
    for($i = 0; $i<100;$i++)
    {
        echo"<li>$i</li>";
    }

    echo "</ul>";
?>
</head>
<body>
    <style>
        h1{
            color:red;
        }
        p{
            color:green;
            font-size:70px;
        }

    </style>
    
</body>
</html>
