<?php 

require_once 'init.php';

//Abre a conexão
$PDO = db_connect();

//SQL para contar o total de registros
$sql_count = "SELECT COUNT(*) AS total FROM users ORDER BY name ASC";

//SQL para selecionar os registros
$sql = "SELECT id, name, email, gender, birthdate FROM users ORDER BY name ASC";

//Conta o total de registros.
$stmt_count = $PDO->prepare($sql_count);
$stmt_count->execute();
$total = $stmt_count->fetchColumn();

//Seleciona os registros
$stmt = $PDO->prepare($sql);
$stmt->execute();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/material.css" />
	<title>Cadastro</title>
</head>
<body>

	<div class="add">
	

	<h2>Materiais adicionados</h2>
	<p>Total de Materiais: <?php echo $total ?></p>

	<?php if ($total > 0): ?>
		</div>
		<table>
			
			<tbody>
				<?php while ($user = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
					<tr>
						
						<div class="text">
						<td><?php echo $user['name'] ?></td>
	                    <td>						</div>
                        <a href="form-edit.php?id=<?php echo $user['id'] ?>">Editar</a>
                        <a href="delete.php?id=<?php echo $user['id'] ?>" onclick="return confirm('Tem certeza de que deseja remover?');">Remover</a>
                    	</td>
					</tr>
					
					
					<?php endwhile; ?>
					<div  class="adicionar">
					<p><a href="form-add.php">Adicionar</a></p>
					</div>
			</tbody>
		</table>

 
        <?php endif; ?>
        
</body>
</html>