<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strict Type</title>
</head>
<body>
    
</body>
</html>
<?php
   
   declare(strict_types = 1);
   function sum(int ...$ints) {
      return array_sum($ints);
   }
   print("Sum is = ".sum(2, '3', 4.1));
?>