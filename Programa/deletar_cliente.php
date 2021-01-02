<?php
include 'conexao.php';
$id = $_GET['id'];
$sql = "DELETE FROM `cliente` WHERE id_Cliente = $id";
$deletar = mysqli_query($conexao,$sql);
header("Location: listar_clientes.php");
?>
