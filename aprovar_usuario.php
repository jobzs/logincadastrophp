<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Aprovar Usuários</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/7025c65354.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container" style="margin-top: 40px;">
        <div style="text-align: right;">
            <a href="menu.php" role="button" style="margin-top: 20px;" type="submit" class="btn btn-sm btn-primary">Voltar</a>
        </div>
        <h3>Lista de Usuários</h3>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Nível</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include 'conexao.php';
                $sql = "SELECT * FROM usuarios where status = 'Inativo'";
                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {
                    $id_usuario = $array['id_usuario'];
                    $nome_usuario = $array['nome_usuario'];
                    $email_usuario = $array['mail_usuario'];
                    $nivel_usuario = $array['nivel_usuario'];
                ?>
                    <tr>
                        <td><?php echo $nome_usuario ?></td>
                        <td><?php echo $email_usuario ?></td>
                        <td><?php echo $nivel_usuario ?></td>
                        <td>
                            <a class="btn btn-success btn-sm" href="_aprovar_usuario.php?id=<?php
                                                                                            echo $id_usuario ?>&nivel=1" role="button" style="color: #fff;"><i class="far fa-smile-beam">&nbsp;</i>Administrador</a>
                            <a class="btn btn-warning btn-sm" href="_aprovar_usuario.php?id=<?php
                                                                                            echo $id_usuario ?>&nivel=2" role="button" style="color: #fff;"><i class="far fa-smile-beam">&nbsp;</i>Funcionario</a>
                            <a class="btn btn-dark btn-sm" href="_aprovar_usuario.php?id=<?php
                                                                                            echo $id_usuario ?>&nivel=3" role="button" style="color: #fff;"><i class="far fa-smile-beam">&nbsp;</i>Conferente</a>
                            <a class="btn btn-danger btn-sm" href="_deletar_usuario.php?id=<?php
                                                                                            echo $id_usuario ?>" role="button" style="color: #fff;"><i class="far fa-trash-alt">&nbsp;</i>Excluir</a>
                        </td>

                    <?php } ?>
                    </tr>
            </tbody>
        </table>

    </div>


    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>