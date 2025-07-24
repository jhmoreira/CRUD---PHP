<?php
include_once("conexao.php");

$id = filter_input(INPUT_POST,"id",FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST,"nome",FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$cep = filter_input(INPUT_POST,"cep",FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST,"rua",FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST,"bairro",FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST,"cidade",FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST,"estado",FILTER_SANITIZE_STRING);

$atualizarUsuario = "UPDATE usuario SET nome = '$nome', email = '$email', cep = '$cep', rua = '$rua', bairro = '$bairro', cidade = '$cidade', estado = '$estado' WHERE id = '$id' ";

$cadastro = mysqli_query($conexao, $atualizarUsuario);

if(mysqli_affected_rows($conexao)){
    header("Location: listar.php");
}
?>