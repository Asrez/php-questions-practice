<?php
if(isset($_GET["number1"])){
    $number1 = $_GET["number1"];
    if($number1 == 0){
        echo "zero";
    }else{
        switch(fmod($number1,2)){
            case 0:
            echo "mosbat";
            break;
          
            case 1:
            echo "manfi";
            break;
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