<?php 
include 'conexao.php';

$categoria = $_POST['funcionario'];
$sql = "INSERT INTO `funcionario`(`funcionario`) VALUES ('$categoria')";
$inserir = mysqli_query($conexao,$sql);

header("Location: listar_clientes.php");
?>