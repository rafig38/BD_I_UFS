<?php
//Criamos uma função que irá retornar o conteúdo do arquivo.
function ler(){
	//Variável arquivo armazena o nome e extensão do arquivo.
	$arquivo = "infos.txt";
	
	//Variável $fp armazena a conexão com o arquivo e o tipo de ação.
	$fp = fopen($arquivo, "r");

	//Lê o conteúdo do arquivo aberto.
	while (!feof ($fp)) {
		$valor = fgets($fp, 4096);

		echo $valor."<br>";
	}
	//Fecha o arquivo.
	fclose($fp);
	
	//retorna o conteúdo.
}

echo ler();

?>
