<?php

$carrinho_de_compras = [
    [
        "nome" => "Chocolate",
        "preco_unitario" => 7,
        "quantidade" => 5,
    ],
    [
        "nome" => "Leite",
        "preco_unitario" => 5,
        "quantidade" => 5,
    ],
    [
        "nome" => "Maçã",
        "preco_unitario" => 2,
        "quantidade" => 10,
    ]
];

$total = 0;

foreach ($carrinho_de_compras as $produto) {
    $nome = $produto['nome'];
    $preco_unitario = $produto['preco_unitario'];
    $quantidade = $produto['quantidade'];

    $preco_total = $preco_unitario * $quantidade;
    $total += $preco_total;

    echo "Produto: " . $nome . "<br>";
    echo "Preço por unidade: R$" . $preco_unitario . "<br>";
    echo "Quantidade: " . $quantidade . "<br>";
    echo "Valor: R$" . $preco_total . "<br><br>";
}

echo "O total do carrinho foi: R$" . $total;

?>
