<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex6p2</title>
</head>

<body>

Traduire ce code avec des if et des else : 

<!-- <?php
  echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
?> -->



     <?php
    
   
    $gender = "femme";
    
 
    if($gender == "homme")
    {
        echo "C'est un développeur !!!";
        
        
    }
    else
    {
        echo "C'est une déveuloppeuse !!!";
    }

    echo ($gender != 'homme')? 'c\'est une developpeuse!!!' : 'c\'est un developpeur!!!'

    ?>

    


   



</body>

</html>