<!DOCTYPE html>

<html>
 <head>
    <meta charset="utf-8">
    <title>Lógica de Programação com PHP - Hipoteticus</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@1,700&family=Nunito:wght@700&family=Yellowtail&display=swap" rel="stylesheet">

 </head>
 <header><center>
	<h1>Hipotheticus</h1></center>
 </header>
 <body>
  
<div>

<form action='index.php' method="get">
<h3>Calculo de horas Trabalhadas</h3><br>
<label class="hora">Horas normais trabalhadas: </label><input type="text" name="hnormais"><br>
<label class="hora">Horas extras trabalhadas:</label><input type="text" name="hextras"><br>
<label class="hora">Usuário  de Vale transporte?</label><select name="vale" >
	<option selected>Sim</option>
	<option>Não</option>
	</select>
<p><input type="submit" value="Calcular" class="botao"></p>
</form>

<section>
<?php 
  $hnormais = $_GET['hnormais'];
  $hextras = $_GET['hextras'];
  $vale = $_GET['vale'];
  
  if($hnormais == "" && $hextras ==""){
	  
  echo "<br>Digite as informações acima<br>para calcular o salario liquido";
  
  }
  else{
	$salBruto = ($hnormais*18.72) + ($hextras*28.08);
	$imposto = ($salBruto*10)/100;
  
  
	if($vale == "Sim"){
		$descVale = ($salBruto*6)/100;
		echo"<br>Funcionario opta por Vale transporte";
		echo"<br>Valor do desconto do VT: $descVale";
	  
	}
	else{
	  $descVale = 0;
		}
  $salLiquido = $salBruto-$imposto-$descVale;
    
  echo "<br>Salario Bruto: $salBruto";
  echo "<br> O imposto é: $imposto";
  echo "<br> Salario Liquido: $salLiquido";
  }
  
  
 ?>
</section>
</div>

 

 </body>
</html>