<?php

include 'conexao.php';

$funcionario = $_POST['funcionario'];
$cpfCliente = $_POST['cpfCliente'];
$nomeCliente = $_POST['nomeCliente'];
$contrato = $_POST['contrato'];
$planoAntigo = $_POST['planoAntigo'];
$planoNovo = $_POST['planoNovo'];
$qtdChip = $_POST['qtdChip'];
$dataUp = $_POST['dataUp'];

$sql = "INSERT INTO `cliente`(`funcionario`,`cpfCliente`, `nomeCliente`, `contrato`, `planoAntigo`, `planoNovo`, `qtdChip`, `data`) VALUES ('$funcionario',$cpfCliente ,'$nomeCliente', $contrato, '$planoAntigo','$planoNovo',$qtdChip ,'$dataUp')";

$inserir = mysqli_query($conexao,$sql);
header("Location: listar_clientes.php");
?>
