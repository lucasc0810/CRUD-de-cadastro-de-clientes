<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "lucas0810";
	$dbname = "cadastro";
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	$pesquisar = $_POST['pesquisar'];
	$result_cliente = "SELECT * FROM cliente WHERE nome LIKE '%$pesquisar%' or cpf LIKE '%$pesquisar%' or nascimento LIKE '%$pesquisar%'";
	$resultado_cliente = mysqli_query($conn, $result_cliente);
	
	echo "<p>DADOS DOS CLIENTES</p><br>";
	while($rows_cliente = mysqli_fetch_array($resultado_cliente)){
		echo "ID: ". $rows_cliente['id'] . "<br>Nome: ".$rows_cliente['nome']."<br>Data de Nascimento: " . $rows_cliente['nascimento'] . "<br>CPF: ". $rows_cliente['cpf'] . "<br><br>";
	}
?>
