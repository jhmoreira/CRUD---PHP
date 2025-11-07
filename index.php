<!DOCTYPE html>
<html>
    <head>
        <title> CRUD PHP</title>
        <meta charset = "UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </head>

    <body class = "bg-light">
        <div class="container py-5">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-5">
                    <h1 class="text-center mb-4 text-primary fw-bold">CADASTRO DE USUÁRIO</h1>
    
        <h2 class="text-secondary mt-3">Dados Pessoais</h2>
        <form action="cadastro.php" method= "POST">
            <div class="col-md-6">
            <label class="form-label">Nome:</label>
            <input type = "text" id="nome" name ="nome" class="form-control">
            </div>
            <div class="col-md-6">
            <label class="form-label">E-mail:</label>
            <input type = "email" id="email" name = "email" class="form-control">
            <hr class ="mt-4">
            </div>

        <h2 class="text-secondary mt-3">Endereço</h2>
        <div class="col-md-4">
        <label>CEP:</label>
        <input type = "text" id="cep" name ="cep" class="form-control" onblur="pesquisacep(this.value);">
        </div>
        <div class="col-md-8">
        <label>Rua:</label>
        <input type = "text" id="rua" name ="rua" class="form-control">
        </div>
        <div class="col-md-5">
        <label>Bairro:</label>
        <input type = "text" id="bairro" name ="bairro" class="form-control">
        </div>
        <div class="col-md-5">
        <label>Cidade:</label>
        <input type = "text" id="cidade" name ="cidade" class="form-control">
        </div>
        <div class="col-md-2">
        <label>Estado:</label>
        <input type = "text" id="estado" name ="estado" class="form-control">
        </div>
        <div class = "text-center mt-4">
            <button type= "submit" class = "btn btn-primary btn-lg px-5">Cadastrar</button>
            <a href = 'listar.php' class = "btn btn-outline btn-lg px-5 ms-2"> Ver lista</a>
        </div>
        </form>
        </div>
        </div>
    </div>
        <script src = "js/api.js"></script>
    </body>
</html>