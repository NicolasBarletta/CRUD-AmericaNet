<?php
include 'conexao.php';
$id = $_GET['id'];
$sql = "DELETE FROM `planos` WHERE id_plano = $id";
$deletar = mysqli_query($conexao,$sql);
header("Location: listar_clientes.php");
?>
