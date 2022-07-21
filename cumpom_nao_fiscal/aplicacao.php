<?php

session_name("LANCHONETE");
session_start();
require_once "variaveis.php";

if(!isset($_SESSION['mesas'])){
    $_SESSION['mesas'] = [];
}
$mesas = &$_SESSION['mesas'];



/**
 * adicionar um novo pedido neste formato:
 *  // $mesa = [
    //     'itens' =>  [
    //         [
    //             "descricao" => "Porção batata frita",
    //             "tipo" => "Un",
    //             "valor_un" => 12.50,
    //             'quantidade' => 2,
    //             'subtotal' => "valor_un*quantidade"
    //         ], [
    //             "descricao" => "Coca cola 2lts",
    //             "tipo" => "Un",
    //             "valor_un" => 8,
    //             "quantidade" => 1,
    //             'subtotal' => "valor_un*quantidade"
    //         ]
    //     ],
    //     'subtotal' => 'soma do subtotal de todos os itnes',
    //     'taxa' => 'subtotal*taxa de serviço',
    //     'total' => 'subtotal+taxa'
    // ];
 */
function addPedido($numero_mesa,$codigo_cardapio,$quantidade){
        $mesa = getMesa($numero_mesa);
        if(is_null($mesa)){
            $mesa = [
                'itens' => [],
                'subtotal' => 0,
            ];
        }
        var_dump($mesa);

}
function getMesa($numero_mesa){
    global $mesas;
    
    if($numero_mesa>NUMERO_MESAS){
        erro('Número da mesa inválido');
    }
    elseif(array_key_exists($numero_mesa,$mesas)){
        return $mesas[$numero_mesa];
    }
    return null;
}

function erro($mensagem){
    die($mensagem);
}

