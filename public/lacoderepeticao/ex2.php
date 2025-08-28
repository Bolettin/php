<?php

$produtos = [
    "Arroz" => 20,
    "Feijão" => 10,
    "Macarrão" => 5,
    "Leite" => 8,
    "Pão" => 6,
];

$total = 0;

  foreach ($produtos as $nome => $preco) {
    echo " Produto: $nome - Preço: $preco $ <br>";
     $totalcompra = $total += $preco;
  }

  
  echo ("O total da compra foi: " . $totalcompra . "$");


?>
