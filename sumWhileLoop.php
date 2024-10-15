<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $sumEven = 0;
        $sumOdd = 0; 
        $i = 0; 

        while ($i < 5) {
            if ($i % 2 == 0) {
                $sumEven += $i; 
            } else {
                $sumOdd += $i;
            }
            $i++; 
        }
        
        echo "tong le: " . $sumOdd . "<br>"; 
        echo "tong chan: " . $sumEven . "<br>"; 
        echo "tong chan le:" . $sumEven + $sumOdd . "<br>"
    ?>
</body>
</html>
