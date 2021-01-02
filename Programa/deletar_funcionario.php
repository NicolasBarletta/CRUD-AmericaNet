<?php
include 'conexao.php';
$id = $_GET['id'];
$sql = "DELETE FROM `funcionario` WHERE id_funcionario = $id";
$deletar = mysqli_query($conexao,$sql);
header("Location: listar_clientes.php");
?>
