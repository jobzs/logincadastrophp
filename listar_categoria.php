<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Listagem de Produtos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/7025c65354.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container" style="margin-top: 40px; width: 500px;">
        <div style="text-align: right;">
            <a href="index.php" role="button" style="margin-top: 20px;" type="submit" class="btn btn-sm btn-primary">Voltar</a>
        </div>
        <h3>Lista de Produtos</h3>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Categoria</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include 'conexao.php';
                $sql = "SELECT * FROM `categoria`";
                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {
                    $id_categoria = $array['id_categoria'];
                    $nome_categoria = $array['nome_categoria'];
                ?>
                    <tr>
                        <td><?php echo $nome_categoria ?></td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="editar_categoria.php?id=<?php
                                                                                            echo $id_categoria ?>" role="button" style="color: #fff;"><i class="far fa-edit">&nbsp;</i>Editar</a>
                            <a class="btn btn-danger btn-sm" href="deletar_categoria.php?id=<?php
                                                                                            echo $id_categoria ?>" role="button" style="color: #fff;"><i class="far fa-trash-alt">&nbsp;</i>Excluir</a>
                        </td>

                    <?php } ?>
                    </tr>
            </tbody>
        </table>

    </div>


    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>