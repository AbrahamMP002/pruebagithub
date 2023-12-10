<?php 
include("conexion.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta  charset="utf-8">
    <meta name= "viewport" content= "width=device-width, initial-scale=1">
    <meta name="description" content="Nuestra franquicia consiste en que usted instale y opere su propio negocio restaurantero: una exitosa y muy rentable taquería ATAKEAR®, un lugar casual, limpio y agradable, donde sus clientes encontrarán los más exquisitos takos al pastor y nuestra especialidad; el tako de Sirloin, que se ha convertido en el sello de nuestra marca y uno de los favoritos de nuestros clientes.">
    <meta name="keywords" content="El mejor restaurante para darse en familia un ataskon de sabor, Atakear!">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atakear! Ordena más fácil!</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <!-----------------------------------ESTILOS--DE--CSS------------------------------->
<link rel="stylesheet" type="text/css" href="NAV_CONT.css">

  </head>
<!---------------------------------CONTENIDO--DEL--PORTAL--INICIAL------------------------------->
<body background="FONDO.jpg">
      <section class="title">
        <a href="ATAKUESTA.php"><img src="LOGO.png" alt="" width="170" height="90"></a>
      </section>

<br><br><br><br><br><br><br><br><br><br><br>

<section>

  <div class="caja"> 
<center>
      <h2>Resultados de la Atakuesta</h2>
 
<h5>¿Es la primera vez que nos visitas?</h5>

<?php 
$question_1=$_POST['question_1']

$archivo1 = "Si_1.txt";
$archivo2 = "No_1.txt";
$abre1 = fopen($archivo1, "r");
$abre2 = fopen($archivo2, "r");
$total1 = fread($abre1, filesize($archivo1));
$total2 = fread($abre2, filesize($archivo2));
fclose($abre1);
fclose($abre2);
  
  if ($question_1 == "Si") {
    $abre1 = fopen($archivo1, "p");
    $total1 = $total1 + 1;
    $grabar1 = fwrite($abre1, $total1);
    fclose($abre1);
  }
else if ($question_1 == "No") {
  $abre2 = fopen($archivo2, "p");
    $total2 = $total2 + 1;
    $grabar1 = fwrite($abre2, $total2);
    fclose($abre2);
}
$votos = $total1 + $total2;
$por1 = total1*100/$votos;
$por1 = intval($por1,10);
$por2 = total2*100/$votos;
$por2 = intval($por2,10);

echo "<br>";
echo "<br>";
echo "<p align=center>";
echo "<img height=15 width=$por1 SRC=barra.png>"
echo "<br>";
echo "<br>";
echo "Si: <b>$total1</b>votos - <b>$por1 %</b>";
echo "<br>";
echo "<p align=center>";
echo "<img height=15 width=$por2 SRC=barra.png>"
echo "<br>";
echo "<br>";
echo "No: <b>$total2</b>votos - <b>$por2 %</b>";
echo "<br>";
echo "<p align=center>";
echo "Total votos: <b>$votos</b>";
?>


<h5>¿Qué te ha parecido la atención?</h5>
 



<h5>¿Qué te ha parecido el precio?</h5>




<h5>¿Cómo te ha parecido el ambiente?</h5>




<h5>¿Cómo te ha parecido la variedad?</h5>




<h5>¿Qué te ha parecido la rapidez?</h5>




<h5>¿Volverias Nuevamente?</h5>










  </div>
</section>

  




  
</body>
  <!------------------------FINAL--DEL--CONTENIDO--DEL--PORTAL--INICIAL----------------------------->

  <!----------------------------------Inicio del pie------------------------------------------>
  
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>
