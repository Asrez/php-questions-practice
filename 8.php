<?php
if(isset($_GET["number1"]) and isset($_GET["number2"]) and isset($_GET["number3"])){
    $number1 = $_GET["number1"];
    $number2 = $_GET["number2"]; 
    $number3 = $_GET["number3"];

    if($number1 > $number2 and $number1 > $number3){
        echo $number1;
    }elseif ($number2 > $number1 and $number2 > $number3) {
        echo $number2;
    }elseif ($number3 > $number1 and $number3 > $number2) {
        echo $number3;
    }elseif($number1 == $number2 and $number1 > $number3){
        echo $number1;
    }elseif($number2 == $number3 and $number2 > $number1){
        echo $number2;
    }elseif($number1 == $number3 and $number2 > $number1){
        echo $number1;
    }elseif($number1 = $number2 = $number3){
        echo "number1 = number2 = number3 ";
    }
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