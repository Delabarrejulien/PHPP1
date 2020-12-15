<?php

$gender ="homme";
$age =6;


function test ($gender,$age)
{
    $response = '';

    if($age >= 18 && ( $gender == "homme"|| $gender == "femme" ))
    {
        $response = "vous êtes, un(e) .$gender. et vous êtes majeur(e)";

        
    }
        elseif ( $age < 18 && ($gender == "homme" || $gender == "femme"))

    {
        $response = "vous êtes, un(e) .$gender. et vous êtes mineur(e)";
    
    }
        else{

        $response='error';

    }
        return $response ;
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

Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :
Homme
Femme  

La fonction doit renvoyer en fonction des paramètres :

Vous êtes un homme et vous êtes majeur
Vous êtes un homme et vous êtes mineur
Vous êtes une femme et vous êtes majeure
Vous êtes une femme et vous êtes mineure

Gérer tous les cas.

<br/>

<?=test('enfant',12);?>



</body>

</html>