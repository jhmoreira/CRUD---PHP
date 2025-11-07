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

    <body class="bg-light">
        <div class="container py-5">
            <div class="d-flex justify-content-between align-items-center mb-4"></div>
        <h1 class="text-primary fw-bold">Usuários cadastrados</h1>
        <a href="index.php" class="btn btn-success">Adicionar Usuário</a>
        </div>

        <div class = "card shadow-sm">
            <div class="card-body">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-primary">
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>CEP</th>
                            <th>Rua</th>
                            <th>Bairro</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                            <th class="text-center">Ações</th>

                        </tr>
                    </thead>
                
            </div>
        </div>

        <tbody>
            <?php
            $listagem = "SELECT * from usuario";
            $listaDeCadastro = mysqli_query($conexao, $listagem);
            while($cadastro=mysqli_fetch_assoc($listaDeCadastro)){?>
            <tr>
                <td><?= htmlspecialchars($cadastro['nome'])?></td>
                <td><?=htmlspecialchars($cadastro['email'])?></td>
                <td><?=htmlspecialchars($cadastro['cep'])?></td>
                <td><?=htmlspecialchars($cadastro['rua'])?></td>
                <td><?=htmlspecialchars($cadastro['bairro'])?></td>
                <td><?=htmlspecialchars($cadastro['cidade'])?></td>
                <td><?=htmlspecialchars($cadastro['estado'])?></td>
                <td class="text-center">
                    <a href = "editar.php?id= <?=$cadastro['id']?>" class="btn btn-warning btn-sm me-2"> Editar</a>
                    <a href = "deletar.php?id=<?=$cadastro['id']?>" class="btn btn-danger btn-sm"> Deletar</a>
                </td>
                
                
            </tr>
            <?php } ?>
        </tbody>
            </table>
        
        </div>
            </div>
            </div>
    </body>
</html>