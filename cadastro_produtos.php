<!DOCTYPE html>
<html>

<head>
  <!-- <link rel="stylesheet" href="./htdocs/bootstrap/css/bootstrap.css"> -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
  <title>Cadastro de Produto</title>
</head>

<body>
  <h1 class="text-center">Cadastro de Produtos</h1>


  <!-- <form action="./htdocs/Estudo/CRUD/cadastrar_produtos.php" method="get"> -->
  <form action="./cadastrar_produtos.php" method="get">
    <div class="form-group">
      <span>Nome</span>
      <input name="nome" class="form-control">
    </div>
    <div class="form-group">
      <span>Preço</span>
      <input name="preco" class="form-control">
    </div>
    <div class="form-group">
      <span>Categoria</span>
      <input name="categoria" class="form-control">
    </div>
    <div class="form-group">
      <span>Quantidade</span>
      <input name="quantidade" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">
      Cadastrar
    </button>
  </form>

</body>

</html>