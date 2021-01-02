<?php
include 'conexao.php';
$id_Cliente = $_POST['id'];
$funcionario = $_POST['funcionario'];
$nomeCliente = $_POST['nomeCliente'];
$contrato = $_POST['contrato'];
$planoAntigo = $_POST['planoAntigo'];
$planoNovo = $_POST['planoNovo'];
$qtdChip = $_POST['qtdChip'];
$dataUp = $_POST['dataUp'];

 $sql = "UPDATE `cliente` SET `funcionario`= '$funcionario',`nomeCliente`= '$nomeCliente' ,`contrato`= $contrato,`planoAntigo`= '$planoAntigo',`planoNovo`='$planoNovo',`qtdChip`= $qtdChip,`data`='$dataUp' WHERE id_cliente = $id_Cliente";
 $atualizar = mysqli_query($conexao,$sql);
 header("Location: listar_clientes.php");
?>
