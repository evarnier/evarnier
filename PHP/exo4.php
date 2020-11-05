<html>
<head>

</head>

<body>
 
<?php

  function equation($a, $b, $c) 
  {
    echo "Recherche des solutions de l'équation $a x $a + $b x + $c";
    $delta = $b*$b - (4 * $a * $c);

    if ($delta < 0)
      echo "Cette équation n'a pas de solution.";

    if ($delta == 0)
      echo "Cette équation a une solution égale à ".-$b/(2*$a);
    
      if ($delta > 0){
      $solution1 = (-$b - sqrt($delta))/(2*$a);
      $solution2 = (-$b + sqrt($delta))/(2*$a);
    
      echo "Cette équation a deux solution: $solution1 et $solution2";
    }
  }
  equation(1, 2, 1);
?>
</body>


</html>