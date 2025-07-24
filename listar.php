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
            echo "<a href = 'index.php'>Cadastrar</a><br><br>";
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
                echo "<a href = 'editar.php?id= ".$cadastro['id']."'> Editar</a>";
                echo "<a href = 'deletar.php?id= ".$cadastro['id']."'> Deletar</a><hr>";
                

            }
            
        ?>
    </body>
</html>