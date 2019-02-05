<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 5</title>

</head>

<body>
    
    <h1>Exercice 7</h1>
    <?php
    
    $hautsDeFrance = array (
        '02' => 'Aisne',
        '59' => 'Nord',
        '60' => 'Oise',
        '62' => 'Pas-de-Calais',
        '80' => 'Somme'    
    );
    
    $hautsDeFrance['51'] = 'Marne'; // on rajoute une case au tableau associatif (à la fin)
    
    print_r($hautsDeFrance);
    
    ?>  
    
    
</body>
</html>