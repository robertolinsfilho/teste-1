<?php

error_reporting(0);
$numero = $_POST['numero'];

if($numero < 0){
    echo 'numero negativo';
    exit();
}
$x =0;
$y = 0;
$z = 0;
$o = 0;
$numero = $numero - 1;
while ($numero != 0){

    if($numero % 3 == 0){
         $x = $numero;
         $y = $y + $x;
    }
    if($numero % 5 == 0){
        $z = $numero;
        $o = $z + $o;
    }
    
    $numero--;
}
$o = $o + $y;

?>


<html>



<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>
<div class="container" style="margin-top: 10%;">
<form method="POST" action="">
<label>Insira o numero</label>
<input type="number" name="numero">
<button type="submit" class="btn btn-primary">Enviar</button>
<br>
<h3>O resultado e : <?php  echo $o;?></h3>
</form>
</div>

</body>



</html>