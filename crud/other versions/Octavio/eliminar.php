<?php
print_r($_GET);

$id=$_GET['colum1'];

$query="DELETE FROM table1 WHERE column1=$id;";

// echo $query;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ( $conn->query($query)== TRUE){
    header("location:crud.php");
}else{
    echo "Algo salio mal <a href='https://localhost/crud/crud.php'> clic aqui para volver al crud</a>" ;

}


?>