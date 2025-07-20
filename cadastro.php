<?php
include_once("conexao.php");

$nome = filter_input(INPUT_POST,"nome",FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

$inserirUsuario = "INSERT INTO usuario (nome, email) VALUES ('$nome', '$email')";

$cadastro = mysqli_query($conexao, $inserirUsuario);
?>