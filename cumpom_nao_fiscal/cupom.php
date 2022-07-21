<!DOCTYPE html>
<?php
	require_once 'aplicacao.php';
	$numero_mesa = $_GET['numero_mesa'];
	$mesa = getMesa($numero_mesa);
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cupom</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<table class="printer-ticket">
 	<thead>
		<tr>
			<th class="ttu" colspan="4">
				<b>Cupom não fiscal</b>
			</th>
		</tr>
	</thead>
	<tbody>
		<tr class="sup ttu p--0">
			<td colspan="4">
				<b>Pedidos</b>
			</td>
		</tr>
		<tr style="font-weight: bold;">
			<td>descrição</td>
			<td>valor</td>
			<td>quant</td>
			<td align="right">total</td>

		</tr>
		<?php
			foreach($mesa['itens'] as &$item):
			?>
			<tr>
				<td><?php echo $item['descricao'];?></td>
				<td><?= convertReal($item['valor_un'])?></td>
				<td><?= $item['quantidade']?></td>
				<td align="right"><?=convertReal($item['subtotal'])?></td>
			</tr>
		<?php endforeach;?>
	</tbody>
	<tfoot>
		<tr class="sup ttu p--0">
			<td colspan="4">
				<b>Totais</b>
			</td>
		</tr>
		<tr class="ttu">
			<td colspan="3">Sub-total</td>
			<td align="right"><?=convertReal($mesa['subtotal'])?></td>
		</tr>
		<tr class="ttu">
			<td colspan="3">Taxa de serviço</td>
			<td align="right"><?=convertReal($mesa['taxa'])?></td>
		</tr>
		<tr class="ttu">
			<td colspan="3">Total</td>
			<td align="right"><?=convertReal($mesa['total'])?></td>
		</tr>
		<tr class="sup">
			<td colspan="4" align="center">
				<b>Mesa: <?=$numero_mesa?></b>
			</td>
		</tr>
		<tr class="sup">
			<td colspan="4" align="center">
				www.site.com
			</td>
		</tr>
	</tfoot>
</table>
</body>

</html>