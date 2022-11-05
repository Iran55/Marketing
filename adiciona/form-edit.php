<?php

require 'init.php';

//Pega ID da URL
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;

//Valida ID
if (empty($id)) {
	echo "ID para alteração não definido.";
	exit;
}

//Busca os dados do usuário a ser editado.
$PDO = db_connect();
$sql = "SELECT name, email, gender, birthdate FROM users WHERE id=:id";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);

//Se o método fetch não retornar um array, significa que o ID não é de um usuário válido
if (!is_array($user)) {
	echo "Nenhum usuário encontrado";
	exit;
}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/material.css" />
        <title>Editar</title>
    </head>
 
    <body>
 
        <h1>Editar</h1>
 

        <form action="edit.php" method="post">
            <label for="name">Nome: </label>
            <br>
            <input type="text" name="name" id="name" value="<?php echo $user['name'] ?>">
 
    
 
            <input type="submit" value="Alterar">
        </form>
 
    </body>
</html>