<?php
include 'conexao.php';
include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$senha = $_POST['senha'];
$nivel = $_POST['nivelusuario'];
$status = 'Ativo';

$sql = "INSERT INTO usuarios (nome_usuario,senha,nivel_usuario,status) values ('$nomeusuario',sha1('$senha'),$nivel,'$status')";
$inserir = mysqli_query($conexao, $sql);
header("Location: listar_clientes.php");
?>
