<?php
require_once 'aplicacao.php';
$numero_mesa = $_GET['numero_mesa'];
$mesa = getMesa($numero_mesa);
if($mesa['total']>0){
    setMensagem("Pagamento de ".convertReal($mesa['total'])." registrado na mesa $numero_mesa");
    unset($mesas[$numero_mesa]);
}

redirect('index.php');