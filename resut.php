<!DOCTYPE html>
<html>
<head><?php
   session_start();
$ponto = $_SESSION['ponto'];
$erro = $_SESSION['nome'];

echo "<center><h1 style='color:red; font-size: 50px; position:relative; top: 230px; ''>$erro     $ponto</h1></center>"
		?>
	<title></title>
	<style type="text/css">
		body{background: gold;}
		


	</style>
</head>
<body>
<center><h1 style="color: red; position: relative; top: 230px; font-family: 'arial'; font-size: 50px;">Você Pontuou:  </h1></center>
</body>
</html>