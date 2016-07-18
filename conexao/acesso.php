<?php

require ('conexao.php');

function Acessar($acesso){

$con = Conectar();

	if(isset($acesso)){

		$nome = filter_input(INPUT_POST, "nome");
		$senha = filter_input(INPUT_POST, "senha");
		
		$select = $con->prepare("SELECT * FROM user WHERE username = :username or email = :email and pass = :senha ");
		$select->bindValue(":username", $nome);
		$select->bindValue(":email", $nome);
		$select->bindValue(":senha", $senha);
		$select->execute();

		if($select->rowCount() > 0):
			header("Location: index.php");
		else:
			return false;
		endif;

	}
}