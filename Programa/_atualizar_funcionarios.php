<?php
include 'conexao.php';
$id = $_POST['id'];
$nomeplano = $_POST['plano'];

 $sql = "UPDATE `funcionario` SET `funcionario`= '$nomeplano' WHERE id_funcionario = $id";
 $atualizar = mysqli_query($conexao,$sql);
 header("Location: listar_clientes.php");
?>
