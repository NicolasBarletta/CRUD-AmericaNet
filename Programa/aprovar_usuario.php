<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprovar Usuário</title>
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
    <div style="text-align: right">
<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
</div>
    <h3>Lista de Usuários</h3>
    <br>
    <table class="table">
  <thead>
    <tr>
    <th scope="col">Nome</th>
    <th scope="col">Nível</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
      <tr>
        <?php
include 'conexao.php';
$sql = "SELECT * FROM `usuarios` WHERE status = 'Inativo'";
$busca = mysqli_query($conexao,$sql);
    while($array = mysqli_fetch_array($busca)) {

        $id_usuario = $array['id_usuario'];
        $nomeusuario = $array['nome_usuario'];
        $nivel = $array['nivel_usuario'];
        ?>
        <tr>
        <td><?php echo $nomeusuario ?></td>
        <td><?php echo $nivel ?></td>
        
        <td><a class="btn btn-success" href="aprovar_usuarios.php?id=<?php echo $id_usuario ?> &nivel=1" role="button"><i class="fas fa-check"></i>&nbsp;Gerente</a>
        <a class="btn btn-warning" href="aprovar_usuarios.php?id=<?php echo $id_usuario ?> &nivel=2" role="button"><i class="fas fa-check"></i>&nbsp;Lider</a>
        <a class="btn btn-dark" href="aprovar_usuarios.php?id=<?php echo $id_usuario ?> &nivel=3" role="button"><i class="fas fa-check"></i>&nbsp;Funcionário</a>
        <a class="btn btn-danger" href="deletar_usuario.php?id=<?php echo $id_usuario ?>&nivel=<?php echo $nivel ?>" role="button"><i class="fas fa-trash-alt"></i>&nbsp;Excluir</a></td>
    </tr>
<?php } ?>
</table>
    </div>
    </div>
    </div>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>