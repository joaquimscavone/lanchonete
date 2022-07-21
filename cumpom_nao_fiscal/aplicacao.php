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
        global $cardapio;
       
        if(!isset($cardapio[$codigo_cardapio])){
            erro("Código do produto inválido");
        }
        $mesa = getMesa($numero_mesa);
        $item = $cardapio[$codigo_cardapio];
        $item['quantidade'] = $quantidade;
        $item['subtotal'] = $quantidade*$item['valor_un'];
        $mesa['subtotal']+=$item['subtotal'];
        $mesa['taxa'] = $mesa['subtotal']*TAXA;
        $mesa['total'] = $mesa['subtotal']+$mesa['taxa'];
        $mesa['itens'][] = $item;
        $_SESSION['mesas'][$numero_mesa] = $mesa;
}
function getMesa($numero_mesa){
    global $mesas;
    
    if($numero_mesa>NUMERO_MESAS){
        erro('Número da mesa inválido');
    }
    elseif(array_key_exists($numero_mesa,$mesas)){
        return $mesas[$numero_mesa];
    }else{
        $mesa = [
            'itens' => [],
            'subtotal' => 0,
            'taxa' => 0,
            'total' => 0,
        ];
        return $mesa;
    }
   
}

function erro($mensagem){
    die($mensagem);
}



function setMensagem($texto, $tipo="sucesso"){
    $_SESSION['msg'] = ["texto" => $texto, "tipo" => $tipo];
 }


 function showMensagem(){
    if(isset($_SESSION['msg'])){
       [$texto,$tipo] = array_values($_SESSION['msg']);
       echo "<div class='msg $tipo'> $texto </div>";
       unset($_SESSION['msg']);
    }
 }

 function convertReal($numero){
    return "R$ ".number_format($numero,2,',');
 }


 function redirect($pagina){
    header("location:$pagina");
    exit();
 }