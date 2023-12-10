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
        <a href="RESULTADOS_ENCUESTA.php"><img src="LOGO.png" alt="" width="170" height="90"></a>
      </section>

<br><br><br><br><br><br><br><br><br><br><br>

<section>

  <div class="caja"> 
<center>
      <h2>Encuesta de servicio</h2>
  <br>

<form action="GUARDAR_INFO.php" method="post">

<h5>¿Es la primera vez que nos visitas?</h5>

<input id="" name="question_1" type="radio" <?php if($id["question_1"] == "Si") echo "checked"; ?> value="Si">
<label>Si</label>
<input id="" name="question_1" type="radio" <?php if($id["question_1"] == "No") echo "checked"; ?> value="No">
<label>No</label>
  <br><br>


<h5>¿Qué te ha parecido la atención?</h5>
 
 <table class="table">
     <thead>
    <tr class="col-12">
<th  class="col-1" scope="col"><center><input name="question_2" type="radio" id="" <?php if($id["question_2"] == "Excelente") echo "checked"; ?> value="Excelente">Excelente</center></th>                
<th  class="col-2" scope="col"><center><input name="question_2" type="radio" id="" <?php if($id["question_2"] == "Normal") echo "checked"; ?> value="Normal">Normal</center></th>

<th  class="col-2" scope="col"><center><input name="question_2" type="radio" id="" <?php if($id["question_2"] == "Malo") echo "checked"; ?> value="Malo">Malo</center></th>

</tr>
</thead>
<tr>
  <td><center><img src="CARA_BUENA.png" width="60"></center></td>
  <td><center><img src="CARA_NEUTRA.png" width="60"></center></td>
  <td><center><img src="CARA_MALA.png" width="60"></center></td>
</tr>
</table>


<h5>¿Qué te ha parecido el precio?</h5>

<table class="table">
     <thead>
    <tr class="col-12">
<th  class="col-1" scope="col"><center><input name="question_3" type="radio" id="" <?php if($id["question_3"] == "Excelente") echo "checked"; ?> value="Excelente">Excelente</center></th>                
<th  class="col-2" scope="col"><center><input name="question_3" type="radio" id="" <?php if($id["question_3"] == "Normal") echo "checked"; ?> value="Normal">Normal</center></th>

<th  class="col-2" scope="col"><center><input name="question_3" type="radio" id="" <?php if($id["question_3"] == "Malo") echo "checked"; ?> value="Malo">Malo</center></th>
</tr>
</thead>

<tr>
  <td><center><img src="CARA_BUENA.png" width="60"></center></td>
  <td><center><img src="CARA_NEUTRA.png" width="60"></center></td>
  <td><center><img src="CARA_MALA.png" width="60"></center></td>
</tr>
</table>


<h5>¿Cómo te ha parecido el ambiente?</h5>

<table class="table">
     <thead>
    <tr class="col-12">
<th  class="col-1" scope="col"><center><input name="question_4" type="radio" id="" <?php if($id["question_4"] == "Excelente") echo "checked"; ?> value="Excelente">Excelente</center></th>                
<th  class="col-2" scope="col"><center><input name="question_4" type="radio" id="" <?php if($id["question_4"] == "Normal") echo "checked"; ?> value="Normal">Normal</center></th>

<th  class="col-2" scope="col"><center><input name="question_4" type="radio" id="" <?php if($id["question_4"] == "Malo") echo "checked"; ?> value="Malo">Malo</center></th>

</tr>
</thead>

<tr>
  <td><center><img src="CARA_BUENA.png" width="60"></center></td>
  <td><center><img src="CARA_NEUTRA.png" width="60"></center></td>
  <td><center><img src="CARA_MALA.png" width="60"></center></td>
</tr>
</table>


<h5>¿Cómo te ha parecido la variedad?</h5>

<table class="table">
     <thead>
    <tr class="col-12">
<th  class="col-1" scope="col"><center><input name="question_5" type="radio" id="" <?php if($id["question_5"] == "Excelente") echo "checked"; ?> value="Excelente">Excelente</center></th>                
<th  class="col-2" scope="col"><center><input name="question_5" type="radio" id="" <?php if($id["question_5"] == "Normal") echo "checked"; ?> value="Normal">Normal</center></th>

<th  class="col-2" scope="col"><center><input name="question_5" type="radio" id="" <?php if($id["question_5"] == "Malo") echo "checked"; ?> value="Malo">Malo</center></th>

</tr>
</thead>

<tr>
  <td><center><img src="CARA_BUENA.png" width="60"></center></td>
  <td><center><img src="CARA_NEUTRA.png" width="60"></center></td>
  <td><center><img src="CARA_MALA.png" width="60"></center></td>
</tr>
</table>


<h5>¿Qué te ha parecido la rapidez?</h5>

<table class="table">
     <thead>
    <tr class="col-12">
<th  class="col-1" scope="col"><center><input name="question_6" type="radio" id="" <?php if($id["question_6"] == "Excelente") echo "checked"; ?> value="Excelente">Excelente</center></th>                
<th  class="col-2" scope="col"><center><input name="question_6" type="radio" id="" <?php if($id["question_6"] == "Normal") echo "checked"; ?> value="Normal">Normal</center></th>

<th  class="col-2" scope="col"><center><input name="question_6" type="radio" id="" <?php if($id["question_6"] == "Malo") echo "checked"; ?> value="Malo">Malo</center></th>

</tr>
</thead>

<tr>
  <td><center><img src="CARA_BUENA.png" width="60"></center></td>
  <td><center><img src="CARA_NEUTRA.png" width="60"></center></td>
  <td><center><img src="CARA_MALA.png" width="60"></center></td>
</tr>
</table>


<h5>¿Volverias Nuevamente?</h5>

<input id="" name="question_7" type="radio" <?php if($id["question_7"] == "Si") echo "checked"; ?> value="Si">
<label>Si</label>
<input id="" name="question_7" type="radio" <?php if($id["question_7"] == "No") echo "checked"; ?> value="No">
<label>No</label>
</center>



<br><br>
<center>

<input type="submit" name="submit" value="Enviar">
<button class="btn btn-success btn-raised btn-sm" type="submit">Enviar &nbsp <i class="fas fa-save"></i></button>



  </center>
</form>
  </div>
</section>

  




  
</body>
  <!------------------------FINAL--DEL--CONTENIDO--DEL--PORTAL--INICIAL----------------------------->

  <!----------------------------------Inicio del pie------------------------------------------>
  
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>
