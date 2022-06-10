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
        <h4>Formulário de Edição</h4>
        <form action="_atualizar_categoria.php" method="POST" style="margin-top: 20px;">
        <?php
        
        $sql = "SELECT * FROM `categoria` WHERE id_categoria = $id";
        $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {
                    $id_categoria = $array['id_categoria'];
                    $nome_categoria = $array['nome_categoria'];

                ?>
            <div class="form-group">
                <label>Categoria</label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $id ?>">
                <input type="text" name="nome_categoria" class="form-control" value="<?php echo $nome_categoria ?>">
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