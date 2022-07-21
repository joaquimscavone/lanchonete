<?php
require_once 'aplicacao.php';
$numero_mesa = $_GET['numero_mesa'];
$codigo_cardapio = $_GET['codigo_cardapio'];
$quantidade = $_GET['quantidade'];

addPedido($numero_mesa,$codigo_cardapio,$quantidade);

setMensagem($cardapio[$codigo_cardapio]['descricao']." foi adicionado a mesa $numero_mesa");
redirect('index.php');
