<?php
include 'conexao.php';
$id = $_POST['id'];
$nomeplano = $_POST['plano'];

 $sql = "UPDATE `planos` SET `plano`= '$nomeplano' WHERE id_plano = $id";
 $atualizar = mysqli_query($conexao,$sql);
 header("Location: listar_clientes.php");
?>
