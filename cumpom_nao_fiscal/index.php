<!DOCTYPE html>
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
			"quantidade" => 4,
		]
	];
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
			$subtotal = 0; 
			foreach($lista as &$item):
			$item['subtotal']=$item['valor_un']*$item['quantidade'];	
			$subtotal+=$item['subtotal'];
		?>
			<tr>
				<td><?php echo $item['descricao']?></td>
				<td>R$<?= $item['valor_un']?></td>
				<td><?= $item['quantidade']?></td>
				<td align="right">R$<?php echo $item['subtotal']?></td>
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
			<td align="right"><?=$subtotal?></td>
		</tr>
		<tr class="ttu">
			<td colspan="3">Taxa de serviço</td>
			<td align="right"><?= ($taxa=$subtotal*0.1)?></td>
		</tr>
		<tr class="ttu">
			<td colspan="3">Total</td>
			<td align="right"><?=$subtotal+$taxa?></td>
		</tr>
		<tr class="sup">
			<td colspan="4" align="center">
				<b>Pedido:</b>
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