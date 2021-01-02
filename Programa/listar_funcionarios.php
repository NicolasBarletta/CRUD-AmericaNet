<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="TesteCores/style.css">
    <script src="https://kit.fontawesome.com/500525a66e.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Menu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="RascunhoPrograma.php">Adicionar Upgrade <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="listar_clientes.php">Visualizar Lista</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="inserir_plano.php">Adicionar Plano</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="inserir_funcionario.php">Adicionar Funcionário</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="listar_planos.php">Editar Planos</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="listar_funcionarios.php">Editar Funcionários</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
        </div>
      </nav>
      <div id="body">
        <img src="TesteCores/Americanet-1-e1588784640627.png" id="img">
        <div id="bloco">
    <div class="container" id="container" style="margin-top: 40px">
    
    <h3>Lista de Clientes</h3>
    <br>
    <table class="table">
  <thead>
    <tr>
    <th scope="col">Plano</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
      <tr>
        <?php
include 'conexao.php';
$sql = "SELECT * FROM `funcionario`";
$busca = mysqli_query($conexao,$sql);
    while($array = mysqli_fetch_array($busca)) {

        $id_plano = $array['id_funcionario'];
        $nomeplano = $array['funcionario'];
    
        ?>
        <tr>
        <td><?php echo $nomeplano ?></td>
        
        <td><a class="btn btn-warning" href="editar_funcionario.php?id=<?php echo $id_plano ?>" role="button"><i class="fas fa-edit"></i>&nbsp;Editar</a>
        <a class="btn btn-danger" href="deletar_funcionario.php?id=<?php echo $id_plano ?>" role="button"><i class="fas fa-trash-alt"></i>&nbsp;Excluir</a></td>
    </tr>
<?php } ?>
</table>
    </div>
    </div>
    </div>    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>