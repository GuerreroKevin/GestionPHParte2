<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
    function confirmar() {
        if (confirm("Va a eliminar un registro, �est� usted seguro?")) {
            return true;
        }
        return false;
    }
    </script>
</head>
<body>
    Bienvenido a mi crud

    <?php
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

$sql = "SELECT column1, column2, column3, column4, column5 FROM table1";
$result = $conn->query($sql);
//print_r($result);
if ($result->num_rows > 0) {
  echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Fecha</th><th>Numero</th><th>NumeroDouble</th><th>Eliminar</th><th>Modificar</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "\n<tr>\n\t<td>".$row["column1"]."</td>\n\t<td>".$row["column2"]."</td>\n\t<td>".$row["column3"]."</td>\n\t<td>".$row["column4"]."</td>\n\t<td>".$row["column5"]."</td>";
    echo "<td><a href='eliminar.php?colum1=".$row["column1"]."' onclick='return confirmar()'><img src='eliminar.png'></a></td><td>
          <a href='update.php?colum1=".$row["column1"]."' onclick='return confirmar()'><img src='update.png'></td></tr>\n";

          //=======================================================
          //�ltima modificaci�n realizada el 2021-09-15
          //Por El�as L�pez Garc�a
          //Por hacer: modificar archivo update.php
          //=======================================================
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
<br>
<form action="insertar.php" method="post">

<fieldset>
<legend>Inserte la informacion del nuevo registro</legend>
  Id: <input type="number" name="identificador" id="" value="1975" required><br>
  Nombre: <input type="text" name="nombre" id="" value="Humberto"><br>
  Fecha: <input type="date" name="fecha" id="" value="1975-06-23"><br>
  Numero: <input type="number" name="numero" id="" value=""><br> 
  Num.Double: <input type="number" name="numdouble" id="" value=""><br>
  <br>
  <input type="submit" value="Aceptar"><br> 
</fieldset>
</form>

</body>
</html>