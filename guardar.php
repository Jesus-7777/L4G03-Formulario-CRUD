<?php
/*
// datos de coneccion
$host="localhost";
$user="root";
$password="";
$db="personas";
//crear la coneccion

$con=new mysqli($host,$user,$password,$db);

// prueba coneccion
if($con->connect_error){
    echo "base de datos no disponible";
}else{
    echo "conectados a la base de datos <br>";
}*/

include('includes/db.php');
$nombre= $_POST["nombre"];
$email= $_POST["email"];

//echo "la informacion es: Nombre: $nombre <br> Email: $email"."<br>";

$sql="insert into usuario(nombre,email) values('$nombre','$email')";

/*if($con->query($query)){
    echo "Persona conectada correctamente";
}else{
    echo "No se puede guardar la persona";
}
*/
if(DB::query(sql)){
    echo "Persona conectada correctamente";
}else{
    echo "No se puede guardar la persona". $con->error;
}
header('Location: crear.php');
?>