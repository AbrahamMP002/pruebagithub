<?php

include("conexion.php");

$question_1=$_POST['question_1'];
$question_2=$_POST['question_2'];
$question_3=$_POST['question_3'];
$question_4=$_POST['question_4'];
$question_5=$_POST['question_5'];
$question_6=$_POST['question_6'];
$question_7=$_POST['question_7'];



$consulta="INSERT INTO servicio VALUES( null,'$question_1','$question_2','$question_3','$question_4','$question_5','$question_6','$question_7')";

$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($resultado){

echo "correcto";
}else{
echo "incorrecto";
}
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
   <title>User Admin Atakear</title>
   </head>
 <body>
   <div class="contenedor">

 <br><br>
 <center>
       <div class="contenido">
         <?php
           if($resultado){
             echo "<h2>Encuesta finalizada</h2>";
           } else {
             echo "Error".$conexion->error;
           }
         ?>
         <br><br>
       </div>
           </div>
 <center>
 
 <button class="btn btn-primary" value="Regresar">
  <a  href="ATAKUESTA.php">Regresar</a>
 </button>
 </center>

 </button>
 </center>
     <?php
       $conexion->close();
      ?>
 </body>
 </html>