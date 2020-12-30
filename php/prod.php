<?php
	function ADDProd()
	{
		$Nome_Prod = $_POST["Nome_Prod"];
		$Valor_Prod = $_POST["Valor_Prod"];
		$Des_Prod = $_POST["Des_Prod"];

		$sql = $conn-> prepare ("INSERT INTO Produto (Nome_Prod,Valor_Prod,Des_Prod) values(:Nome_Prod, :Valor_Prod, :Des_Prod");

		$sql -> bindParam("Nome_Prod",$Nome_Prod);
		$sql -> bindParam("Valor_Prod",$Valor_Prod);
		$sql -> bindParam("Des_Prod",$Des_Prod);
	
		$sql ->execute();

		$x = $sql -> fetchAll(PDO::FETCH_ASSOC);

		if (count($x)<=0) 
		{
			echo "<script language='javascript'>
				alert ('Erro');
			  </script>";
		}
		else
		{
			echo "<script language='javascript'>
				location.href='prod.html';
				alert ('Cadastrado com sucesso!');
			  </script>";
		}
	}
?>
