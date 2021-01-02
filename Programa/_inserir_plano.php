<?php 
include 'conexao.php';

$categoria = $_POST['plano'];
$sql = "INSERT INTO `planos`(`plano`) VALUES ('$categoria')";
$inserir = mysqli_query($conexao,$sql);

header("Location: listar_clientes.php");
?>