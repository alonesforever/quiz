<?php
session_start();

error_reporting(E_ERROR && E_WARNING);

$nome = $_POST['nome'];
$pontos = "<script>document.write(cont50)</script>";
$_SESSION['nome'] = $nome;
$_SESSION['ponto'] = $pontos;

$questao = (isset($_GET["q"])) ? $_GET["q"]:1;


 ?>







<!DOCTYPE html>
<html>
<head >
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<script type="text/javascript">
		




	</script>
	<link rel="stylesheet" type="text/css" href="quiz.css">
</head>
<body style="background: CK" onload="conton();">
	<?php

echo "<h1 style='color:red;'>$nome</h1><h1>$pontos</h1>";
echo "<h2 style='color:blue;'>Questão: $questao</h2>";


 ?>
<center><DIV class="Maracujá"> 

<br>
<br>
<br>
<button onclick="acertou();" class="a">A)</button>
<br>
<br>
<button onclick="errou();">B)</button>
<br>
<br>
<button onclick="errou();">C)</button>
<br>
<br>
<button onclick="errou();">D)</button>
<br>
<br>
<button onclick="errou();">E)</button>
<br>
<br>
<div class="crono"id="relogio"><h1 id="cronometro"></h1></div>
</DIV></center>
<div class="cron" ><center><h1 id="repetcont"></h1></center></div>

<center><div class="acertou" id="acertou">
	<img src="acertou.png"><br>
	<br>
    
     
   <a href="quiz.php?q=<?=++$questao;?>" type="submit" style="font-family: 'sans-serif'; position: absolute; top: 330px;left:50px;  " class="btn">Ir para a proxima pergunta</a>
</form>
</div></center>
<center><div class="errou" id="errou1">
	<img src="errou.png"><br>
	<br>
   
   <button style="font-family: 'sans-serif'; position: relative; top: 240px;  " class="btn">Ir para a proxima pergunta</button>

</div></center>
<div class="impatar" id="impatar"></div>



<div class="acabou" id="acabou1">
	<br>
	<br>
	<br>
	<center><img src="oi.png" style="width: 190px; height: 150px;"></center>
	<br>
	<br>
	<br>
	<h1 style="font-family:'arial'; position:relative; left:123px; color: red; ">O Tempo Acabou</h1>
	<br>

	

	<br>
	<center><h1 id="h1"></h1></center>

</div>

<script type="text/javascript">
	var h1 = document.getElementById('h1')
var acertou1 = document.getElementById('acertou');
var errou1 = document.getElementById('errou1');
var impatar = document.getElementById('impatar');
var contr = new Number();

var cronometro = document.getElementById('cronometro');
var relogio = document.getElementById('relogio');
var contr1 = new Number();
contr1 = 40;
contr = 30;
var contr2 = new Number();

	
  var repetcont = document.getElementById("repetcont");
contr2 = 5;



		
      function acertou(){
       
  var cont = 1;
        repetcont.innerText = cont;
        acertou1.style.cssText = 'left:425px; top:180px; background:#7FFF00; border-radius:35px; border: 3px solid black;';
        impatar.style.cssText = 'left: auto;'
       contr1 = 100000;
       contr = 10000000;



    repetcont1 = repetcont.innerText;
}

function errou(){
		
       

      
        errou1.style.cssText = 'left:425px; top:180px; border-radius:35px; border: 3px solid black;';
        impatar.style.cssText = 'left: auto;'
       contr1 = 100000;

    
}









function conton(){





contr1 = contr1 - 1;


if ((contr1 -1 )>= 0) {
	;
setTimeout('conton();', 1000);

}

if (contr1 == 0) {
	conto();
}

}





function conto(){


contr = contr - 1
cronometro.innerText = contr;



if ((contr -1 )>= 0) {
	
setTimeout('conto();', 1000);

}
if (contr == 5) {
	relogio.style.background = 'red';
}


if(contr == 0){
	
		
var acabou = document.getElementById('acabou1');
	 acabou.style.cssText = 'top:200px; border-radius:35px; left:425px; color:blue; border: 3px solid black;';
        impatar.style.cssText = 'left: auto;';
        
       conto11();
 }

}
 function conto11(){
h1.innerText  = contr2;

contr2 = contr2 - 1




if (contr2 >= 0) {
	
setTimeout('conto11();', 1000);

}

if(contr2 == 0){
	window.location = 'cadastro.php';
}
}
function oi1(){
	
     
}
</script>
</body>
</html>