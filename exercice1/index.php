<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 5</title>

</head>

<body>
    
    <h1>Exercice 1</h1>
    <?php
    
    $months = array ('janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre');
    
    //foreach ($months as $month)
    //{
    //    echo $month . ' ';
    //}
    
    // pour compter la taille d'un tableau on utilise la fonction count() ou sizeof()
    $monthsLength = sizeof($months);
    
    for ($counter = 0; $counter < $monthsLength; $counter++)
    {
        echo $months[$counter] . ' ';
    }
    
    ?>  
    
    
</body>
</html>