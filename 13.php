<?php
if(isset($_GET["number1"])){
    $number1 = $_GET["number1"];
    for($i=1;$i<=$number1;$i++){
        if(fmod($i,2) == 1){
            echo $i."<br>";
        }
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
        <input type="number" name="number1">
        <button>sabt</button>
    </form>
</body>
</html>