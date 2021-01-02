<?php
include 'conexao.php';
$id = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Upgrade</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="cadastrocliente.css">
    <link rel="stylesheet" href="TesteCores/style.css">
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
<div class="container" id="conPrincipal">
<form action="_atualizar_up.php" method="POST">
    <?php
        $sql = "SELECT * FROM `cliente` WHERE id_cliente = $id";
        $buscar = mysqli_query($conexao,$sql);
        while ($array = mysqli_fetch_array($buscar)) {

            $id_cliente = $array['id_cliente'];
            $funcionario = $array['funcionario'];
            $cpfCliente = $array['cpfCliente'];
            $nomeCliente = $array['nomeCliente'];
            $contrato = $array['contrato'];
            $planoAntigo = $array['planoAntigo'];
            $planoNovo = $array['planoNovo'];
            $qtdChip = $array['qtdChip'];
            $data = $array['data'];
    ?>
    <div class="form-group">
        <h4>Cadastro de Upgrade</h4>

        <div class="form-group">
        <label for="exampleFormControlSelect1">Funcionário</label>
        <select class="form-control" id="exampleFormControlSelect1" name="funcionario">
          <?php 
          include 'conexao.php';
          $sql = "SELECT * FROM funcionario";
          $inserir = mysqli_query($conexao,$sql);
          while ($array = mysqli_fetch_array($inserir)) {

          echo $id_funcionario = $array['id_funcionario'];
          echo $nome_funcionario = $array['funcionario'];
          ?>
            <option><?php echo $nome_funcionario ?></option>
          <?php }
          ?>
        </select>
      </div>
        <div class="form-group">
        <label>CPF Cliente</label>
        <input type="number" class="form-control" id="cpfCliente" name="cpfCliente" value="<?php echo $cpfCliente ?>" disabled >
        <input type="number" class="form-control" id="cpfCliente" name="id" value="<?php echo $id_cliente ?>" style="display: none" >
      </div>

      <div class="form-group">
        <label>Contrato Cliente</label>
        <input type="number" class="form-control" id="contratoCliente" name="contrato" value="<?php echo $contrato ?>" >
      </div>

      <div class="form-group">
        <label>Nome Cliente</label>
        <input type="text" class="form-control" id="nomeCliente" name="nomeCliente" value="<?php echo $nomeCliente ?>">
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect1">Plano Antigo</label>
        <select class="form-control" id="exampleFormControlSelect1" name="planoAntigo">
          <?php 
          include 'conexao.php';
          $sql = "SELECT * FROM planos";
          $inserir = mysqli_query($conexao,$sql);
          while ($array = mysqli_fetch_array($inserir)) {

          echo $id_plano = $array['id_plano'];
          echo $nome_plano = $array['plano'];
          ?>
            <option><?php echo $nome_plano ?></option>
          <?php }
          ?>
        </select>
      </div>


      <div class="form-group">
        <label for="exampleFormControlSelect1">Plano Novo</label>
        <select class="form-control" id="exampleFormControlSelect1" name="planoNovo">
          <?php 
          include 'conexao.php';
          $sql = "SELECT * FROM planos";
          $inserir = mysqli_query($conexao,$sql);
          while ($array = mysqli_fetch_array($inserir)) {

          echo $id_plano = $array['id_plano'];
          echo $nome_plano = $array['plano'];
          ?>
            <option><?php echo $nome_plano ?></option>
          <?php }
          ?>
        </select>
      </div>

      <div class="form-group">
        <label>Quantidade de Chips</label>
        <input type="number" class="form-control" name="qtdChip" id="qtdChip" value="<?php echo $qtdChip ?>">
      </div>

      <div class="form-group">
        <label>Data</label>
        <input type="text" class="form-control" name="dataUp" id="dataUp" value="<?php echo $data ?>">
      </div>
      <div id="btnSubmit">
      <button type="submit" class="btn btn-warning">Atualizar</button>
    </div>
    <?php
        }
    ?>
    </form>
</div>
      </div>
      </div>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>