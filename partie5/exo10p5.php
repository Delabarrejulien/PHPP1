<?php


$hautdefrance = array ('02' =>'l\'Aisne',
                 '59' =>'le Nord',
                 '60' =>'l\'Oise',
                 '62' =>'le Pas-de-calais',
                 '80' =>'la Somme',
);

echo '<pre>';
print_r($hautdefrance);
echo '</pre>';

foreach($hautdefrance as $key=>$element)
{
    echo 'Le département ['. $key .'] est ' . $element. '<br/>';
}


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex5p5</title>
</head>

<body>
<!-- <p><?= $month[5] ?></p> -->



</body>

</html>