<?php
include 'conexao.php';
$id = $_GET['id'];

$deletar = "DELETE FROM usuarios where id_usuario = $id";
$fila = mysqli_query($conexao, $deletar);

header("Location: aprovar_usuario.php");

?>