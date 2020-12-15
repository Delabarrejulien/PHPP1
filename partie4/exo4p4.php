<?php 

    $a = 1;
    $b = 4;

    function test ($a,$b)
     {
        if ($a > $b) {
            $response = 'Le premier nombre est plus grand.';
        } else if ($a < $b) {
            $response = 'Le premier nombre est plus petit.';
        } else {
            $response = 'Les deux nombres sont identiques.' ;
        } 

    
            return $response ;
    
    }   

    ?>

    

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex4p4</title>
</head>

<body>

<p><?= test(2,2);?></p>
<p><?= test(2,5);?></p>
<p><?= test(10,2);?></p>


     


   



</body>

</html>