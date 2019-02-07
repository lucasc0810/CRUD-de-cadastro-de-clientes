<?php
	$conexao = mysqli_connect("localhost", "root", "lucas0810", "cadastro");

	$nome = $_POST["nometxt"];
	$data = $_POST["datatxt"];
	$cpf = $_POST["cpftxt"];

	$query = sprintf("insert into cliente (nome, nascimento, cpf) value('%s', '%s', '%s')", $nome, $data, $cpf);
	mysqli_query($conexao, $query);
	echo "Cadastrado com sucesso!";
?>
