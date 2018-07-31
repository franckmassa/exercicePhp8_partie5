<?php
//Initialisation du tableau months
$months [0] = 'janvier';
$months [1] = 'février';
$months [3] = 'mars';
$months [4] = 'avril';
$months [5] = 'mai';
$months [6] = 'juin';
$months [7] = 'juillet';
$months [8] = 'août';
$months [9] = 'sepetembre';
$months [10] = 'octobre';
$months [11] = 'novembre';
$months [12] = 'décembre';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice8</title>
</head>
<body>
  <p>
    <?php
    foreach($months as $element){
      echo $element . '<br/>';
    }
    ?>
  </p>
</body>
</html>
