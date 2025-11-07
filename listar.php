<?php
include_once("conexao.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Listagem de cadastro</title>
        <meta charset = "utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
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