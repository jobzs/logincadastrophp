<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <style type="text/css">
        #tamanhoContainer {
            width: 500px;
        }

        label {
            margin-bottom: 10px;
        }

        input,
        select {
            margin-bottom: 20px;
        }

        .botao1 {
            background-color: purple;
            color: white;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container" id="tamanhoContainer" style="margin-top: 40px;">
        <div style="text-align: right;">
            <a href="index.php" role="button" style="margin-top: 20px;" type="submit" class="btn btn-sm btn-primary">Voltar</a>
        </div>
        <h4>Formulário de Cadastro</h4>
        <form action="_inserir_produto.php" method="POST" style="margin-top: 20px;">
            <div class="form-group">
                <label>Nro Produto</label>
                <input type="number" name="nroproduto" class="form-control" placeholder="Insira o número do produto" required>
            </div>
            <div class="form-group">
                <label>Nome Produto</label>
                <input type="text" name="nomeproduto" class="form-control" placeholder="Insira o nome do produto" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="categoria">

                <?php
                include 'conexao.php';
                $sql = "SELECT * FROM categoria order by nome_categoria ASC";
                $buscar = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($buscar)){
                    $id_categoria = $array['id_categoria'];
                    $nome_categoria = $array['nome_categoria'];
                ?>

                 <option><?php echo $nome_categoria ?></option>

                <?php } ?>
                   
                    

                </select>
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" name="quantidade" class="form-control" placeholder="Insira a quantidade do produto" required>
            </div>
            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" name="fornecedor">


                <?php
                include 'conexao.php';
                $sql2 = "SELECT * FROM fornecedor order by nome_fornecedor ASC";
                $buscar2 = mysqli_query($conexao, $sql2);

                while ($array2 = mysqli_fetch_array($buscar2)){
                    $id_fornecedor = $array2['id_fornecedor'];
                    $nome_fornecedor = $array2['nome_fornecedor'];
                ?>

                 <option><?php echo $nome_fornecedor ?></option>

                <?php } ?>
                   

                </select>
            </div>
            <div style="text-align: right;">
                <button style="margin-top: 20px;" type="submit" class="btn botao1 btn-sm">Cadastrar</button>
            </div>

        </form>
    </div>


    <script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>