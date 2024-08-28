<?php
if(isset($_GET["number1"]) and isset($_GET["number2"])){
    $number1 = $_GET["number1"];
    $number2 = $_GET["number2"]; 
    echo "masahat=====>".$number1*$number2;
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
        <input type="number" name="number1">
        <input type="number" name="number2">
        <button>sabt</button>
    </form>
</body>
</html>