<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 5</title>

</head>

<body>
    
    <h1>Exercice 4</h1>
    <?php
    
    $months = array ('janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre');
    
    //on entre la clé qui correspond à l'élément aout et on lui attribue une nouvelle valeur
    $months[7] = "août";
    
    echo $months[7];
    ?>  
    
    
</body>
</html>