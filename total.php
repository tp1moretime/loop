<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      
       $even = 0;
       $odd = 0;
       
       for ($i = 0; $i <= 5; $i++) {
           if ($i % 2 == 0){
            $even += $i;
           }
           else {
            $odd += $i;
           }
       }
       
       echo "Chẵn: " . $even . "<br>";
       echo "Lẻ: " . $odd . "<br>";    
       
       
    ?>
</body>
</html>