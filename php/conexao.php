<?php
	
	$servidor = "mysql:host=localhost;dbname=BD_CantinhoSabores;"; //Apresenta os dados da conexão
	$user ="root"; //Adiciona o nome de usuário do banco de dados a uma variável
	$senha =""; //Adiciona a senha do banco de dados a uma variável

	//Faz com que a conexão seja executada através de um PDO
	$conn = new PDO( $servidor, $user, $senha, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)); 

	$table = "CREATE TABLE IF NOT EXISTS Cliente(
		Cod_Cliente int(15) auto_increment primary key,
		Nome_Cliente varchar(40) not null,
		Telefone_Cliente varchar(16) not null,
		Email_Cliente varchar(30) not null,
		Senha_Cliente varchar(16) not null);

		CREATE TABLE IF NOT EXISTS Produto(
		Cod_Prod varchar(6) primary key,
		Nome_Prod varchar(20) not null,
		Valor_Prod float(3,2) not null,
		Desc_Prod varchar(200) not null);

		CREATE TABLE IF NOT EXISTS Admin(
		Cod_ADM int(5) primary key,
		Nome_ADM varchar(50) not null,
		Senha_ADM varchar(16) not null,
		Email_ADM varchar(30) not null)";

	$criar = $conn -> prepare($table);

	$criar -> execute();
?>