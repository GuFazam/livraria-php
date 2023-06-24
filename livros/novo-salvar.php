<?php 
include "../includes/conexao.php";

$nome = $_POST['titulo'];
$isbn = $_POST['isbn'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$ano_publicacao = $_POST['ano_publicacao'];
$valor = $_POST['valor'];
$foto = $_POST['foto'];

$sql = "insert into tb_livros(titulo, isbn, autor, editora, ano_publicacao, valor, foto) values('$titulo', '$isbn', '$editora', '$ano_publicacao', '$valor', '$foto')";

mysqli_query($conexao, $sql);
mysqli_close($conexao);

?>