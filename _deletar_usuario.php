<?php 

include 'conexao.php';
$id = $_GET['id'];


$sql = "DELETE FROM `usuarios` WHERE id_usuario = $id";
$deletar = mysqli_query($conexao, $sql)

?>

<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 400px; margin-top: 50px;">
    <center>
        <h3>Usuário deletado com sucesso</h3>
        <div style="margin-top: 10px">
            <a href="aprovar_usuario.php" class="btn btn-sm btn-warning" style="color: #fff">Voltar</a>
        </div>
    </center>

</div>