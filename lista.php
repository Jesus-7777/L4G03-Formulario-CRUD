<?php
   include('includes/db.php');
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <div class="Tabla">
    <h1>LISTA DE USUARIOS</h1>
     <div class="datos-us">

  <table class="dat_usu">
    <tr  >
       <br>
        <thead>
         <th> Nombre </th>
         <th> Email </th>
        </thead>
       
    </tr>

    <?php

        $sql="SELECT * FROM usuario";
        $result=DB::query($sql);

        while($mostrar= mysqli_fetch_array($result)){
          ?>

        <tr>
           <td><?php echo $mostrar['nombre'] ?></td>
           <td><?php echo $mostrar['email'] ?></td>
        </tr>

        <?php
        }
    ?>
    
  
  </table>
  </div>
<br>
    <div class="log">
    <a href="crear.php"><input type="button" value="Registrar"></a>
    </div>

</div>
    
</body>
</html>