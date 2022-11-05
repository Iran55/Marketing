<?php

require_once 'init.php';

//Pega dados do formulário
$name = isset($_POST['name']) ? $_POST['name'] : null;


//Validar para evitar dados vazios
if (empty($name)) {
	echo "Preencha todos os campos";
	exit;
}



//Insere no banco
$PDO= db_connect();
$sql = "INSERT INTO users(name) VALUES (:name)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':name',$name);

if ($stmt->execute()) {
	header('Location: index.php');
} else {
	echo "Erro ao cadastrar";
	print_r($stmt->errorInfo());
}

?>