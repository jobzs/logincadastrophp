<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Listagem de Produtos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/7025c65354.js" crossorigin="anonymous"></script>
</head>

<body>


    <?php

    session_start();
    $usuario = $_SESSION['usuario'];

    if (!isset($_SESSION['usuario'])) {
        header('Location: index.php');
    }

    include 'conexao.php';

    $sql = "SELECT nivel_usuario FROM usuarios WHERE mail_usuario = '$usuario' and status = 'Ativo'";
    $buscar = mysqli_query($conexao, $sql);
    $array = mysqli_fetch_array($buscar);
    $nivel = $array['nivel_usuario'];


    ?>

    <div class="container" style="margin-top: 40px">
        <div style="text-align: right;">
            <a href="menu.php" role="button" style="margin-top: 20px;" type="submit" class="btn btn-sm btn-primary">Voltar</a>
        </div>
        <h3>Lista de Produtos</h3>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Bro Produto</th>
                    <th scope="col">Nome Produto</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include 'conexao.php';
                $sql = "SELECT * FROM `estoque`";
                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {
                    $id_estoque = $array['id_estoque'];
                    $nroproduto = $array['nroproduto'];
                    $nomeproduto = $array['nomeproduto'];
                    $categoria = $array['categoria'];
                    $quantidade = $array['quantidade'];
                    $fornecedor = $array['fornecedor'];

                ?>
                    <tr>
                        <td><?php echo $nroproduto ?></td>
                        <td><?php echo $nomeproduto ?></td>
                        <td><?php echo $categoria ?></td>
                        <td><?php echo $quantidade ?></td>
                        <td><?php echo $fornecedor ?></td>
                        <td>

                        <?php if(($nivel == 1) || ($nivel == 2)){ ?>
                            <a class="btn btn-warning btn-sm" href="editar_produto.php?id=<?php
                                                                                            echo $id_estoque ?>" role="button" style="color: #fff;"><i class="far fa-edit">&nbsp;</i>Editar</a>
                                                                                            <?php } ?>
                        <?php if($nivel == 1){ ?>
                            <a class="btn btn-danger btn-sm" href="deletar_produto.php?id=<?php
                                                                                            echo $id_estoque ?>" role="button" style="color: #fff;"><i class="far fa-trash-alt">&nbsp;</i>Excluir</a>
                                                                                            <?php } ?>
                        </td>

                    <?php } ?>
                    </tr>
            </tbody>
        </table>

    </div>


    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>