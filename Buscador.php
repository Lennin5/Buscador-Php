<!DOCTYPE html>
<html>
<head>
  <title>Buscador</title>

<body>

     <form autocomplete="off" action="Buscador.php" autocomplete="off" method="post">
       <input type="text" placeholder="Buscar..." name="palabra">
         <input type="submit" value="Explorar" class="btn deep-purple lighten-1" name="btn2">
            </form>
</body>
</html>

<?php
error_reporting(0);

  if (isset($_POST['palabra'])) {

    include 'conexion.php';

  }

  $palabra=$_POST['palabra'];
  $query="SELECT * FROM burritos WHERE id LIKE '%$palabra%'";
  $consulta=$mysqli->query($query);

  if($consulta->num_rows>=1){ 

  echo "<h4 style=\"color: black\">Resultados para: " .$palabra; echo "</h4>";

    while($reg=$consulta->fetch_array(MYSQLI_ASSOC)){ ?>


              <p>Nombre: <?php  echo " ".$reg['Nombre'] .""; ?> <br>
              <p>Apellido: <?php  echo " ".$reg['Apellido'] .""; ?><br>
              <p>Materia: <?php  echo " ".$reg['Materia'] .""; ?><br>
<br>            


<hr>
<hr>

<?php

}
  }else{
    echo "<h4 style=\"color: black\">No hemos encotrado ningun resultado con la palabra: " .$palabra;

  }

?>







