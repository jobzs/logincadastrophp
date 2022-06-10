<?php
include 'conexao.php';
include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$mail = $_POST['mailusuario'];
$senha = $_POST['senhausuario'];
//$nivel = $_POST['nivelusuario'];
$status = 'Inativo';


$sql = "INSERT INTO usuarios (nome_usuario, mail_usuario, senha_usuario, status) values ('$nomeusuario', '$mail', sha1('$senha'), '$status')";

$inserir = mysqli_query($conexao, $sql);


?>

<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width: 400px; margin-top: 20px;">
<center>
<h3>Usuário adicionado com sucesso, aguardando aprovação</h3>
<div style="padding-top: 20px"> 
<a href="cadastro_usuario_externo.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
</center>
</div>

</div>