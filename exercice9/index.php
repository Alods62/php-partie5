<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 5</title>

</head>

<body>
    
    <h1>Exercice 9</h1>
    <?php
    
    // tableau associatif avec une clé et une valeur $exemple = array ( 'clé => 'valeur' )
    $hautsDeFrance = array (
        '02' => 'Aisne',
        '59' => 'Nord',
        '60' => 'Oise',
        '62' => 'Pas-de-Calais',
        '80' => 'Somme'    
    );    
    

    foreach($hautsDeFrance as $element)
    {?>
        <p><?= $element ?></p>
    <?php
    }
    ?>  
    
    
</body>
</html>