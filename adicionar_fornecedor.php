<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        
        .botao1 {
            background-color: purple;
            color: white;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container" style="margin-top: 40px; width: 500px;">
        <div style="text-align: right;">
            <a href="index.php" role="button" style="margin-top: 20px;" type="submit" class="btn btn-sm btn-primary">Voltar</a>
        </div>
        <h4>Cadastro de Fornecedor</h4>
        <form action="_inserir_fornecedor.php" method="POST" style="margin-top: 20px;">
            <div class="form-group">
                <label>Fornecedor:</label>
                <input type="text" name="fornecedor" class="form-control" placeholder="Digite o nome da Fornecedor" autocomplete="off">
            </div>
            <div style="text-align: right;">
                <button type="submit" class="btn botao1">Cadastrar</button>
            </div>
        </form>
    </div>



    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>