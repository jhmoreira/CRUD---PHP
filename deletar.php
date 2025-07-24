<?php
include_once("conexao.php");

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

$deletarUsuario = "DELETE from usuario WHERE id = '$id' ";

$cadastro = mysqli_query($conexao, $deletarUsuario);

if(mysqli_affected_rows($conexao)){
    header("Location: listar.php");
}
?>