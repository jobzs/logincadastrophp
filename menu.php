<!DOCTYPE html>
<html lang="en">

<head>
    <title>Menu</title>
    <link rel="stylesheet" href="css/bootstrap.css">
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

    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <?php
            if (($nivel == 1) || ($nivel == 2)) {


            ?>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Adicionar Produtos</h5>
                            <p class="card-text">Opção para adicionar produtos em nosso estoque</p>
                            <a href="adicionar_produto.php" class="btn btn-primary">Cadastrar Produto</a>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lista de Produtos</h5>
                        <p class="card-text">Visualizar, editar e excluir os produtos.</p>
                        <a href="listar_produtos.php" class="btn btn-primary">Produtos</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6" style="margin-top: 20px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar Categoria</h5>
                        <p class="card-text">Opção para adicionar categoria de produtos.</p>
                        <a href="adicionar_categoria.php" class="btn btn-primary">Cadastrar Categoria</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 20px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar Fornecedores</h5>
                        <p class="card-text">Opção para adicionar fornecedores.</p>
                        <a href="adicionar_fornecedor.php" class="btn btn-primary">Cadastrar Fornecedores</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6" style="margin-top: 20px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cadastrar Usuários</h5>
                        <p class="card-text">Cadastrar Usuários</p>
                        <a href="cadastro_usuario.php" class="btn btn-primary">Cadastrar Usuários</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6" style="margin-top: 20px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Aprovar Usuários</h5>
                        <p class="card-text">Aprovar usuários cadastrados</p>
                        <a href="aprovar_usuario.php" class="btn btn-primary">Aprovar Usuários</a>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>