<?php
if(isset($_GET["name"])){
    $name = $_GET["name"];
    echo $name;
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
        <input type="text" name="name">
        <button>sabt</button>
    </form>
</body>
</html>