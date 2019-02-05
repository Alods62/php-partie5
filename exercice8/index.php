<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 5</title>

</head>

<body>
    
    <h1>Exercice 8</h1>
    <?php
    
    $months = array ('janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre');
    
    
    foreach($months as $element) //foreach pour parcourir les éléments d'un tableau, foreach($nomDuTableau as $nomDesElementsDuTableau)
    {?>
       <p><?= $element ?></p>
    <?php
    }
    ?>
    
</body>
</html>