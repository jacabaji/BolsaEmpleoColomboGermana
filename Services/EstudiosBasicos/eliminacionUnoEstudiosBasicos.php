<?php
if (isset($_SERVER['HTTP_ORIGIN'])) {  
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");  
    header('Access-Control-Allow-Credentials: true');  
    header('Access-Control-Max-Age: 80');   
}  
  
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {  
  
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))  
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");  
  
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))  
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");  
}  

$servername = "localhost";
$username = "id1038231_admin";
$password = "colombo";
$dbname = "id1038231_bolsa";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo (string)$conn;
if (isset($_POST["idEstudiante"]) && isset($_POST["idEstudio"]))
{
  $idEst = $_POST["idEstudiante"];
  $idEstudio=  $_POST["idEstudio"];
  $result = mysqli_query($conn,"delete from estudios_basicos where id_estudiante=".$idEst." and id_estudio=".$idEstudio);


 echo "Los datos del Id Estudio".$idEstudio." del Estudiante".$idEst." se eliminaron";
} 
else 
{
  $idEst = null;
  echo "no envio el id estudiante";
}




mysqli_close($conn);


?>