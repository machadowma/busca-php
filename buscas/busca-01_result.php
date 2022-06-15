<!DOCTYPE html>
<html lang="en">
<head>
<title>Exemplo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


<style>
	/* Custom style */
    .navbar{
        margin-bottom: 1rem;
    }
	body {
    	padding-bottom: 50px;
	}
}

</style>
</head>
<body>

<?php include("menu.php"); ?>


<div class="container">
	<h1>Busca 01</h1>
	<h5>Retorna pessoas como nome EXATAMENTE igual ao digitado.</h5>
	<?php
	
	include("banco_dados_conexao.php");	
	
	try {
	
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $dbh->prepare('SELECT * from pessoa WHERE nome = ?');
		$stmt->bindParam(1, $nome);
		$nome = $_POST["nome"];
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		if(!empty($result)) {
		
			// escrevendo cabeçalho a partir dos índices do vetor FETCH_ASSOC
			echo '<div class="table-responsive"> ';
			echo '<table class="table">';
			echo "<thead>";
			echo "<tr>";
			
			foreach($result[0] as $index=>$values) {
				echo "<th>$index</th>";
			}
			echo "</tr>";
			echo "</thead>";
			echo "<tbody>";

			// escrevendo resultado do SELECT
			foreach($result as $row) {
				echo "<tr>";
				foreach($row as $value){
					echo "<td>$value</td>";
				}
				echo "</tr>";
			}

			echo '</tbody>';
			echo '</table>';
			echo '</div>';
		} else {
			echo "Nenhum resultado encontrado.";
		}

		$dbh = null;
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/><br><a href='index.php'>voltar</a>";
		die();
	}

	
	?>

	<br><a href="index.php" class="btn btn-secondary">voltar</a>
</div>
<br><br>
<?php include("footer.php"); ?>
</body>
</html>