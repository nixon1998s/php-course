<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Echo e Print</title>
	</head>
	<body>

		<?php 
			echo "Comando echo<br/>";

			print "Comando print";

			$nome = 'Nixon';
			$idade = 23;
			$peso = 71.5;
			$fumante_sn = true;

		?>

		<h1>Ficha cadastral</h1>
		<br/>
		<p>Nome:<?= $nome ?></p>
		<p>Idade:<?= $idade ?></p>
		<p>Peso:<?= $peso ?></p>
		<p>Fumante:<?= $fumante_sn ?></p>


	</body>
</html>