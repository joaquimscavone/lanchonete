<?php
require "aplicacao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
</head>

<body>
    <pre>
    <?php

    $mesa = [
        'itens' =>  [
            [
                "descricao" => "Porção batata frita",
                "tipo" => "Un",
                "valor_un" => 12.50,
                'quantidade' => 2,
                'subtotal' => "valor_un*quantidade"
            ], [
                "descricao" => "Coca cola 2lts",
                "tipo" => "Un",
                "valor_un" => 8,
                "quantidade" => 1,
                'subtotal' => "valor_un*quantidade"
            ]
        ],
        'subtotal' => 'soma do subtotal de todos os intes',
        'taxa' => 'subtotal*taxa de serviço',
        'total' => 'subtotal+taxa'
    ];
    print_r($mesa);
    ?>
</body>
</html>