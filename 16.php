<?php
if(isset($_GET["number1"]) and isset($_GET["number2"]) and isset($_GET["number3"])){
    $number1 = $_GET["number1"];
    $number2 = $_GET["number2"]; 
    $number3 = $_GET["number3"];

    echo min($number1,$number2,$number3);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        number1:<input type="number" name="number1"></br>
        number2:<input type="number" name="number2"></br>
        number3:<input type="number" name="number3"></br>
        <button>sabt</button>
    </form>
</body>
</html>