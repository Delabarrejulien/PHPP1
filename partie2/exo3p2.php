<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex3p2</title>
</head>

<body>

     <?php

// Créer deux variables age et gender. La variable gender peut prendre comme valeur :
// Homme
// Femme

// En fonction de l'âge et du genre afficher la phrase correspondante :
// Vous êtes un homme et vous êtes majeur
// Vous êtes un homme et vous êtes mineur
// Vous êtes une femme et vous êtes majeure
// Vous êtes une femme et vous êtes mineur 
    
     $age = 18;

     $gender = "femme";
     
  
     if($age >= 18 AND $gender == "homme"
     OR $age >= 18 AND $gender == "femme" )
     {
         echo "vous êtes, un(e)";
         echo $gender;
         echo " et vous êtes majeur(e) ";
         
     }
     elseif ( $age < 18 and $gender == "homme" or $gender == "femme")
{
        echo "vous êtes, un(e)";
        echo $gender;
        echo " et vous êtes mineur(e) ";

}
     ?>


   



</body>

</html>