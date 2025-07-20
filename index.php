<!DOCTYPE html>
<html>
    <head>
        <title> CRUD PHP</title>
        <meta charset = "UTF-8">
    </head>

    <body>
        <h1>CADASTRO DE USUÁRIO</h1>

        <form action="cadastro.php" method= "POST">
            <label>Nome:</label>
            <input type = "text" id="nome" name ="nome">

            <label>E-mail:</label>
            <input type = "email" id="email" name = "email">

            <input type= "submit" value = "Cadastrar">

        </form>
    </body>
</html>