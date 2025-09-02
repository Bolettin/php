<?php

$notas = [
    "p1" => 10 ,
    "p2" => 7,
    "p3" => 5,
    
];

$total = 0;

  foreach ($notas as $prova => $nota) {
    echo " Prova: $prova - Nota: $nota <br>";
     $totalnota = $total += $nota;
     $media = $totalnota / 3; 
  }

  
  echo ("O total da nota foi: " . $totalnota . "<br>" );
  echo ("A média das notas foi: " . $media . "<br>" );



?>
