<?php
$con = new mysqli("localhost", "root", "root", "loja");
$categoria = $_GET['categoria'];
$sql = "SELECT * from produtos";

if (!empty($categoria)) {
  $sql =  $sql . " WHERE categoria = $categoria";
}
$lista = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html>

<head>
  <!-- <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">   -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
  <title>Lista de Produtos</title>
</head>

<body>
  <h1 class="text-center">Listagem de Produtos</h1>

  <?php
  if ($_GET["cadastrado"] == '1') {
  ?>
    <div class="alert alert-success">Cadastrado com sucesso!</div>
  <?php
  }
  if ($_GET['deletado'] == '1') {
  ?>
    <div class="alert alert-success">Deletado com sucesso!</div>
  <?php
  }
  ?>

  <form name="form-group" action="" method="get">
    <input type="text" name="categoria" , placeholder="Categoria">
    <button type="submit" class="btn pmd-btn-fab pmd-ripple-effect btn-primary">
      Buscar
    </button>
  </form>

  <table class=" table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">nome</th>
        <th scope="col">catogoria</th>
        <th scope="col">quantidade</th>
        <th scope="col">preço</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($row = $lista->fetch_assoc()) {
        // echo "<pre>";
        // var_dump($row);
        // echo "</pre>";
        // }
      ?>
        <tr>
          <td><?php echo $row["id"]; ?>
          </td>
          <td><?php echo $row["nome"]; ?>
          </td>
          <td><?= $row["categoria"] ?></td>
          <td><?= $row["quantidade"] ?></td>
          <td><?= $row["preco"] ?></td>
          <td><a href="<?php echo './editar_produtos.php?id=' . $row['id'] ?>" class="btn btn-primary">Editar</a></td>
          <td><a href="<?php echo './deletar_produtos.php?id=' . $row['id'] ?>" class="btn btn-danger">Excluir</a></td>
        </tr>
      <?php
      }
      ?>

    </tbody>
  </table>
</body>

<footer>
  <a href="./cadastro_produtos.php" type="submit" class="btn pmd-btn-fab pmd-ripple-effect btn-primary">
    < Voltar </a> </footer> </html>