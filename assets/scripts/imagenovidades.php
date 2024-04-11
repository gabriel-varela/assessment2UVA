<?php
$conexao = new mysqli('localhost', 'root', '', 'empresa');
$id = isset($_GET['id']) ? $_GET['id'] : '';
$consulta = $conexao->query("SELECT image FROM novidades WHERE id_nov = $id");
$resultado = $consulta->fetch_assoc();
header("Content-type: image/jpeg");
echo $resultado['image'];
$conexao->close();