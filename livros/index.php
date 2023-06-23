<?php 
include "../includes/cabecalho.php";
?>

<main class="container">
    <div class="row">
        <div class="col-12"><h4>LISTAGEM DE LIVROS</h4></div>
        <div class="col-12">
            <a href="novo-formulario.php" class="btn btn-outline-primary">
                <img src="" alt="" width="30"> Adionar novo livro
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <td>Código</td>
                        <td>Título</td>
                        <td>Editora</td>
                        <td>Autor</td>
                        <td>Ações</td>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include "../includes/conexao.php";
                    $sql = "select * from tb_livros";
                    $todos_os_livros = mysqli_query($conexao, $sql);
                    while($um_livro = mysqli_fetch_assoc($todos_os_livros)):
                        ?>
                        <tr>
                            <td><?php echo $um_livro['id'];?></td>
                            <td><?php echo $um_livro['titulo']?></td>
                            <td><?php echo $um_livro['editora']?></td>
                            <td><?php echo $um_livro['autor']?></td>
                            <td>
                                <a href="ver.php"></a>
                                <a href="editar.php"></a>
                                <a href="excluir.php"></a>
                            </td>
                        </tr>
                        <?php
                        endwhile;
                        mysqli_close($conexao);
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php 
include "../includes/rodape.php";
?>