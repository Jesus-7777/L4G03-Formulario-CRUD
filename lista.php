 <?php

    $conexion= new mysqli('localhost','root','','personas');
  //  $con =new mysqli($host,$user,$password,$db);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ruta/estilos.css">
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
         <th> id </th>
         <th> Nombre </th>
         <th> Email </th>
        </thead>
       
    </tr>

    <?php

        $sql="SELECT * FROM usuario";
        $result= mysqli_query($conexion,$sql);

        while($mostrar= mysqli_fetch_array($result)){
          ?>

        <tr>
         <td><?php echo $mostrar['id'] ?></td>
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