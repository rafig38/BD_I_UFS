<meta Charset="utf-8">

<?php
	#file_put_contents()
	#file_get_contents()

	$arquivo = 'infos.txt';
	$texto = "CPF: ".$_POST["cpf"]."<br><br>NOME: ".$_POST["nome"]."<br><br>DATA DE NASCIMENTO: ".$_POST["dn"]."<br><br><br>";

	// apaga e escreve no arquivo:
	// se usar o FILE_APPEND o php acrescenta
	
	file_put_contents($arquivo,$texto,FILE_APPEND);
	
	header('Location: index.html');
?>


