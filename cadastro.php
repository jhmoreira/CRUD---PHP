<?php
include_once("conexao.php");

$nome = filter_input(INPUT_POST,"nome",FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$cep = filter_input(INPUT_POST,"cep",FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST,"rua",FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST,"bairro",FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST,"cidade",FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST,"estado",FILTER_SANITIZE_STRING);

$inserirUsuario = "INSERT INTO usuario (nome, email, cep, rua, bairro, cidade, estado) VALUES ('$nome', '$email', '$cep', '$rua', '$bairro', $cidade', '$estado')";

$cadastro = mysqli_query($conexao, $inserirUsuario);
?>