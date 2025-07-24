<?php
include_once("conexao.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Listagem de cadastro</title>
        <meta charset = "utf-8">
    </head>

    <body>
        <h1>Listagem de cadastro</h1>

        <?php
            $listagem = "SELECT * from usuario";
            $listaDeCadastro = mysqli_query($conexao, $listagem);

            while($cadastro=mysqli_fetch_assoc($listaDeCadastro)){

                echo "Nome: ". $cadastro["nome"]. "<br>";
                echo "E-mail: ". $cadastro["email"]. "<br>";
                echo "CEP: : ". $cadastro["cep"]. "<br>";
                echo "Rua: ". $cadastro["rua"]. "<br>";
                echo "Bairro: ". $cadastro["bairro"]. "<br>";
                echo "Cidade: ". $cadastro["cidade"]. "<br>";
                echo "Estado: ". $cadastro["estado"]. "<br>";
                echo "<a href = 'editar.php?id= ".$cadastro['id']."'> Editar</a><hr>";
                

            }
            
        ?>
    </body>
</html>