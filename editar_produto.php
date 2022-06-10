<?php 

include 'conexao.php';

$id =$_GET['id'];


?>

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
        input, select {
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
        <h4>Formulário de Cadastro</h4>
        <form action="_atualizar_produto.php" method="POST" style="margin-top: 20px;">
        <?php
        
        $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
        $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {
                    $id_estoque = $array['id_estoque'];
                    $nroproduto = $array['nroproduto'];
                    $nomeproduto = $array['nomeproduto'];
                    $categoria = $array['categoria'];
                    $quantidade = $array['quantidade'];
                    $fornecedor = $array['fornecedor'];

                ?>
            <div class="form-group">
                <label>Nro Produto</label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $id ?>">
                <input type="number" name="nroproduto" class="form-control" value="<?php echo $nroproduto ?>" disabled>
            </div>
            <div class="form-group">
                <label>Nome Produto</label>
                <input type="text" name="nomeproduto" class="form-control" value="<?php echo $nomeproduto ?>">
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="categoria"  value="<?php echo $categoria ?>" >
                    <option>Periféricos</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Celulares</option>

                </select>
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" name="quantidade" class="form-control"  value="<?php echo $quantidade ?>" >
            </div>
            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" name="fornecedor"  value="<?php echo $fornecedor ?>" >
                    <option>Fornecedor A</option>
                    <option>Fornecedor B</option>
                    <option>Fornecedor C</option>

                </select>
            </div>
            <div style="text-align: right;">
                <button style="margin-top: 20px;" type="submit" class="btn botao1 btn-sm">Atualizar</button>
            </div>
            

        </form>
        <?php }  ?>
    </div>


    <script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>