<!DOCTYPE html>
<html>
    <head>
        <title> CRUD PHP</title>
        <meta charset = "UTF-8">
    </head>

    <body>
        <h1>CADASTRO DE USUÁRIO</h1>
        <a href = 'listar.php'>Listar</a><br>
        <h2>Dados Pessoais</h2>
        <form action="cadastro.php" method= "POST">
            <label>Nome:</label>
            <input type = "text" id="nome" name ="nome">

            <label>E-mail:</label>
            <input type = "email" id="email" name = "email">
            <hr>

        <h2>Endereço</h2>

        <label>CEP:</label>
        <input type = "text" id="cep" name ="cep" onblur="pesquisacep(this.value);">
        <label>Rua:</label>
        <input type = "text" id="rua" name ="rua">
        <label>Bairro:</label>
        <input type = "text" id="bairro" name ="bairro">
        <label>Cidade:</label>
        <input type = "text" id="cidade" name ="cidade">
        <label>Estado:</label>
        <input type = "text" id="estado" name ="estado"> <br><br>

            <input type= "submit" value = "Cadastrar">

        </form>

        <script src = "js/api.js"></script>
    </body>
</html>