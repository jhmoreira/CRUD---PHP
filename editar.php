<?php
include_once("conexao.php");
$consulta = "SELECT * FROM usuario WHERE id = '1' ";
$usuario = mysqli_query($conexao,$consulta);
$resposta = mysqli_fetch_assoc($usuario);
?>
<!DOCTYPE html>
<html>
    <head>
        <title> CRUD PHP</title>
        <meta charset = "UTF-8">
    </head>

    <body>
        <h1>EDITAR  USUÁRIO</h1>

        <h2>Dados Pessoais</h2>
        <form action="editar_usuario.php" method= "POST">
            <label>Nome:</label>
            <input type = "text" id="nome" name ="nome" value = "<?php echo $resposta['nome'];?>">

            <label>E-mail:</label>
            <input type = "email" id="email" name = "email" value = "<?php echo $resposta['email'];?>">
            <hr>

        <h2>Endereço</h2>

        <label>CEP:</label>
        <input type = "text" id="cep" name ="cep" value = "<?php echo $resposta['cep'];?>" onblur="pesquisacep(this.value);">
        <label>Rua:</label>
        <input type = "text" id="rua" name ="rua" value = "<?php echo $resposta['rua'];?>">
        <label>Bairro:</label>
        <input type = "text" id="bairro" name ="bairro" value = "<?php echo $resposta['bairro'];?>">
        <label>Cidade:</label>
        <input type = "text" id="cidade" name ="cidade" value = "<?php echo $resposta['cidade'];?>">
        <label>Estado:</label>
        <input type = "text" id="estado" name ="estado" value = "<?php echo $resposta['estado'];?>"> <br><br>

            <input type= "submit" value = "Atualizar">

        </form>

        <script src = "js/api.js"></script>
    </body>
</html>