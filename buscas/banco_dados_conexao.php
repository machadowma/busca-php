<?php
try {

	$host='localhost';
	$db = 'buscas';
	$username = 'root';
	$password = 'root';
	$dbh = new PDO('mysql:host='.$host.';dbname='.$db.'', $username, $password);
} catch (PDOException $e) {
	print "Error!: " . $e->getMessage() . "<br/><br><a href='index.php'>voltar</a>";
	die();
}

	
?>

