<?php
$conn = new mysqli("localhost", "root", "root", "loja");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
// var_dump($id);
echo "ID Deleted: " . $id;

$sql = "DELETE from produtos WHERE id=$id";
mysqli_query($con, $sql);


// echo($conn->query($sql));
echo"<br>Deletado: ";
var_dump($conn->query($sql));

if ($conn->query($sql) === true) {
  echo "<br>Record deleted successfully";
  header("Location: ./listar_produtos.php?deletado=1");
} else {
  echo "Error deleting record: " . $conn->error;
}



// $sql = "SELECT * FROM produtos WHERE id = $id";
// $produtos = mysqli_query($con, $sql);

// $result = $mysqli_query->affected_rows();
// $result2 = mysqli_affected_rows($id);
// echo "Resultado: ".$result;
// echo "Resultado2: ".$result2;
// printf("Affected rows (DELETE): %d\n", $mysqli_query->affected_rows);

// echo "Deleted: ".$mysqli_query->affected_rows()

// while ($result = $produtos->fetch_assoc()) {
//   echo "<pre>";
//   var_dump($result);
//   echo "</pre>";
// }

// while ($row = $lista->fetch_assoc()) {
//   echo "<pre>";
//   var_dump($row);
//   echo "</pre>";
// }

// if() {

// }


?>