<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex1p2</title>
</head>

<body>
    Créer une variable age et l'initialiser avec une valeur.
    Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.
<br/>
<br/>
<br/>
    <?php
    
     $age = rand(0,99);

     echo $age;
     
  
     if($age < 18){
         echo "vous êtes mineur";
     }
  
     else{
         echo "vous êtes majeur";
     }
     

      ?>





</body>

</html>