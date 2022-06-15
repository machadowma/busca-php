<!DOCTYPE html>
<html lang="en">
<head>
<title>Exemplo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body>

<?php include("menu.php"); ?>

<div class="container">
	<h1>Busca 03</h1>
	<h5>Busca por mais de um critério, usando operador AND.</h5>
	<form method="post" action="busca-03_result.php">
	
	<div class="form-group">
		<label for="nome">Nome:</label>
		<input type="text" class="form-control" id="nome" name="nome">
    </div>
	<div class="form-group">
		<label for="sobrenome">Sobrenome:</label>
		<input type="text" class="form-control" id="sobrenome" name="sobrenome">
    </div>
	<div>
		<label class="radio-inline"><input type="radio" name="sexo" value='M'>Masculino</label>
		&nbsp;
		<label class="radio-inline"><input type="radio" name="sexo" value='F'>Feminino</label>
		
	</div>
	<br>
    <button type="submit" class="btn btn-primary">Buscar</button>
	<a href="index.php" class="btn btn-secondary">voltar</a>

	</form>
	
</div>
<br><br><br><br>
<?php include("footer.php"); ?>
</body>
</html>