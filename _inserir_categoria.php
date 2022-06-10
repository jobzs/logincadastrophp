<?php 

include 'conexao.php';

$categoria = $_POST['categoria'];

$sql = "INSERT INTO `categoria`(`nome_categoria`) VALUES ('$categoria')";

$inserir = mysqli_query($conexao,$sql);

?>


<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width: 400px; margin-top: 20px;">
<center>
<h3>Adicionado com Sucesso!</h3>
<div style="padding-top: 20px"> 
<a href="adicionar_categoria.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
</center>
</div>

</div>