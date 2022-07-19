<?php

$lista = [
    [
        "descricao" => "Porção batata frita",
        "tipo" => "Un",
        "valor_un" => 12.50,
        "quantidade" => 2,
    ],
    [
        "descricao" => "Porção peixe frito",
        "tipo" => "Un",
        "valor_un" => 35,
        "quantidade" => 1,
    ],
    [
        "descricao" => "Coca cola 2lts",
        "tipo" => "Un",
        "valor_un" => 8,
        "quantidade" => 1,
    ],
    [
        "descricao" => "Picole Kibom Master",
        "tipo" => "Un",
        "valor_un" => 10,
        "quantidade" => 2,
    ]
];

echo "<pre>";
$subtotal = 0;
foreach ($lista as &$item) {
    $item['subtotal'] = $item['quantidade'] * $item['valor_un'];
    $subtotal += $item['subtotal'];
}





print_r($lista);
print_r($subtotal);
