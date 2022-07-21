<?php
require_once "aplicacao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
        <?php
        showMensagem();
        $options = "";
        foreach($cardapio as $key => $item){
            $options.="<option value='$key'>".$item['descricao']." - ".convertReal($item['valor_un'])."</option>";
        }
        echo '<div class="mesas">';
        for ($x = 1; $x <= NUMERO_MESAS; $x++) : 
            $mesa = getMesa($x);
            $class = ($mesa['total']>0)?"active":"";
            echo "<div class='$class'>";
        ?>
                <h1>Mesa <?= $x ?></h1>
                <form action="add.php">
                    <select name="codigo_cardapio">
                        <?=$options?>
                    </select>
                    <input type="number" name="quantidade">
                    <input type="hidden" name="numero_mesa" value="<?=$x?>">
                    <button type="submit">Adicionar</button>

                </form>
                <a href="cupom.php?numero_mesa=<?=$x?>">[Imprimir Comanda]</a>
                <a href="pagamento.php?numero_mesa=<?=$x?>">[Registrar Pagamento]</a>
                <h2>Total: <span><?=convertReal($mesa['total'])?></span></h2>
            </div>

        <?php endfor; ?>
    </div>
</body>

</html>