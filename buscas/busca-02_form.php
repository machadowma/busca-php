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
	<h1>Busca 02</h1>
	<h5>Retorna pessoas como PARTE do nome igual ao digitado (LIKE).</h5>
	<form method="post" action="busca-02_result.php">
	<div class="form-group">
		<label for="nome">Nome:</label>
		<input type="text" class="form-control" id="nome" name="nome">
    </div>
	<br><input type="submit" name="buscar" value="Buscar" class="btn btn-primary">
	<a href="index.php" class="btn btn-secondary">voltar</a>
	</form>
</div>
<br><br>
<?php include("footer.php"); ?>
</body>
</html>