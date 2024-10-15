<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .square{
        width: 100px;
        height: 100px;
        background-color: red;
        margin: 10px;
        
    }
    body{
        display: flex;
    }
</style>
<body>
    <?php
        // $a = 5;
        // for ($x = 0; $x < $a; $x++) {
        //     echo "The number is: $x <br>";
        // }
         
        for ($x = 0; $x < 5; $x++) {
            echo "<div>";
            
            for($j = 0; $j < 5; $j++){
                echo "<div class='square'></div>";
            }
            echo "</div>";
        }
        
    ?>
</body>
</html>