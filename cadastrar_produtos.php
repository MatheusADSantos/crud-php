<?php
$conn = new mysqli("localhost", "root", "root", "loja");

if(!$conn) {
  echo "Connection Fail!".$conn->connection_error;
}

var_dump($_GET["nome"]);

$nome = $_GET["nome"];
$preco = $_GET["preco"];
$categoria = $_GET["categoria"];
$quantidade = $_GET["quantidade"];

// $sql = "SELECT * from produtos";

$sql = "INSERT into produtos (nome, preco, categoria, quantidade) values ('".$nome."', ".$preco.", ".$categoria.", ".$quantidade.")";
var_dump($sql);

if(mysqli_query($conn, $sql)) {
  // echo "Cadastrou com sucesso!";
  header("Location: ./listar_produtos.php?cadastrado=1");
  
} else {
  echo "Deu Erro! ".mysqli_error($conn);
}

?>