<!DOCTYPE html>
<html>
<head>
	<title>Escolha!!</title>


<style type="text/css">
	*{
		margin: 0;
		padding: 0;

	}


	.btns{
		position: absolute;
        width: 500px;
        height: 55px;
        border-radius: 35px;
        left: 425px;
         top: 230px;
         background: darkorange;
         border: 2px solid black;
      font: 25px 'arial';
      transition: .5s;
         cursor: pointer;
         animation: 2s entrada 1;
       text-decoration: none;
	}
.btne{
position: absolute;
  width: 500px;
        height: 55px;
        border-radius: 35px;
        left: 425px;
         top: 330px;
          background: #DCDCDC;
         border: 2px solid black;
      font: 25px 'arial';
       transition: .5s;
          cursor: pointer;
          animation-name: entradae;
          animation-duration: 2s;
          animation-iteration-count: 1;
          text-decoration: none;

}
.btnh{
position: absolute;
  width: 500px;
        height: 55px;
        border-radius: 35px;
        left: 425px;
        top: 430px;
         background: #00BFFF;
         border: 2px solid black;
       font: 25px 'arial';
        transition: .5s;
        cursor: pointer;
        animation: 2s entradah 1;
        text-decoration: none;

}

.h1{
	font-size: 50px;
	color: WHITE;
	font-family: 'algerian';

}
@keyframes entrada{
	0%{
		transition: 0;
		left: 100%;
		top: -100%;
	}
100%{
	transition: .5s;
left: 425px;
top: 230px;
}
}
@keyframes entradah{
	0%{
		transition: 0;
		top:100%;
	}
100%{
	transition: .5s;
right: auto;
top: 430px;
}}
@keyframes entradae{
	0%{
 left: -100%;
 transition: 0;
	}
	75%{
      left: 425px;
      transform: rotate(720deg);
	}
}

</style>

</head>
<body style="background: gold;">

<center><div style="width: 100%; background: #1C1C1C; height: 80px; border-bottom-right-radius:80px;border-bottom-left-radius:80px"><h1 class="h1">Escolha um Tema para o Quiz:</h1></div></center>

	<center><button class="btns"><a href='#' style="text-decoration: none;color:black;">Energia Solar</a></button>
	<br>
	<br>
<button class='btne'><a href='#' style="text-decoration: none; color: black">Energia Eólica</a></button>
<br>
<br>
<button class="btnh"><a href='#' style="text-decoration: none; color: black;">Energia Hidrelétrica</a></button></center>
</body>
</html>