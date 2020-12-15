<?php



function test ($number1 = 1 , $number2 =2, $number3 = 1) {

    return $number1+$number2+$number3;

}


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex6p4</title>
</head>

<body>
    <?= test();?>

</body>

</html>