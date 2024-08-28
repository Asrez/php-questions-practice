<?php
if(isset($_GET["number1"])){
    $number1 = explode(",",$_GET["number1"]);
    echo array_sum($number1);
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
        <label>لیستی از اعداد را بگیر و با , از هم جدا کنید </label>
        <input type="text" name="number1">
        <button>sabt</button>
    </form>
</body>
</html>