<?php
include 'conexao.php';
include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$senha = $_POST['senha'];
$status = 'Inativo';

$sql = "INSERT INTO usuarios (nome_usuario,senha,status) values ('$nomeusuario',sha1('$senha'),'$status')";
$inserir = mysqli_query($conexao, $sql);
header("Location: listar_clientes.php");
?>
