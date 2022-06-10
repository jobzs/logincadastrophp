<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <style>
        #tamanho {
            width: 350px;
            margin-top: 100px;
            border-radius: 10px;
            border: 2px solid #f3f3f3;
            padding: 40px;
            -webkit-box-shadow: 15px 10px 28px -12px rgba(163, 163, 163, 1);
            -moz-box-shadow: 15px 10px 28px -12px rgba(163, 163, 163, 1);
            box-shadow: 15px 10px 28px -12px rgba(163, 163, 163, 1)
        }
    </style>
</head>

<body>
    <div class="container" id="tamanho">
        <center>
            <img src="imagem/cadeado.png" width="40%">
        </center>
        <form action="index1.php" method="post">
            <div class="form-group">
                <label>Usuário</label>
                <input type="text" name="usuario" class="form-control" placeholder="Usuário" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" required>
            </div>
            <div style="text-align: right">
                <button type="submit" class="btn btn-sm btn-success">Entrar</button>
            </div>
        </form>

    </div>

    <div style="margin-top: 10px;">
    <center>
        <small>Não possui cadastro? Clique <a href="cadastro_usuario_externo.php"> aqui</a></small>
    </center>
    </div>


    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>