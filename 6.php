<?php
if(isset($_GET["number1"]) and isset($_GET["str"])){
    $number1 = $_GET["number1"];
    $str = $_GET["str"]; 
    for($i=1;$i<=$number1;$i++){
        echo $str."<br>";
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
        "adad:"<input type="number" name="number1">
        "text"<input type="text" name="str">
        <button>sabt</button>
    </form>
</body>
</html>