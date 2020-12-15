
<?php

$name1 = 'julien' ;
$surname1 = 'Delabarre';
$age1 = 39 ;

function test ($name,$surname,$age)
{
    return "bonjour ". $name ." ".$surname ." tu as  ". $age ." ans ! ";
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

    <?= test('Thierry','Lachat',28);?>
    <br/>
    <?= test($name1,$surname1,$age1);?>




   



</body>

</html>