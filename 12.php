<?php
if(isset($_GET["str"])){
    $str = $_GET["str"];
    echo str_word_count($str);
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
        <input type="text" name="str">
        <button>sabt</button>
    </form>
</body>
</html>