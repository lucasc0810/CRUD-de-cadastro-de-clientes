<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "lucas0810";
	$dbname = "cadastro";
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	$apagar = $_POST['apagar'];
	$result_cliente = "DELETE FROM cliente WHERE nome LIKE '%$apagar%' or cpf LIKE '%$apagar%' or nascimento LIKE '%$apagar%'";
	$resultado_cliente = mysqli_query($conn, $result_cliente);
	
	echo "Dados do usuário apagado";
?>
