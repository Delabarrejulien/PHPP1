<?php

$month = array ('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'); 

echo '<pre>';
print_r($month);
echo '</pre>';

$replacements = array_splice($month,7,1,'Août');

echo '<pre>';
print_r($month);
echo '</pre>';

$month[7]='Août'

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex4p5</title>
</head>

<body>




</body>

</html>