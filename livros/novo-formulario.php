<?php
include "../includes/cabecalho.php";
?>

<main class="container">
    <div class="row">
        <div class="col-12">
            <h4>CADASTRO DE LIVROS</h4>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="novo-salvar.php" method="post" class="row">
                <div class="col-3 mb-2">
                    <label for="form-label">isbn</label>
                    <input class="form-control" name="isbn">
                </div>
                <div>
                    <div class="col-9 mb-2">
                        <label for="form-label">titulo</label>
                        <input class="form-control" name="titulo">
                    </div>
                </div>
                <div>
                    <div class="col-6 mb-2">
                        <label for="form-label">editora</label>
                        <input class="form-control" name="editora">
                    </div>
                </div>
                <div>
                    <div class="col-8 mb-2">
                        <label for="form-label">foto</label>
                        <input class="form-control" name="foto">
                    </div>
                </div>
                <div>
                    <div class="col-6 mb-2">
                        <label for="form-label">autor</label>
                        <input class="form-control" name="autor">
                    </div>
                </div>
                <div>
                    <div class="col-2 mb-2">
                        <label for="form-label">ano da publicação</label>
                        <input class="form-control" name="ano_publicacao">
                    </div>
                </div>
                <div>
                    <div class="col-2 mb-2">
                        <label for="form-label">valor</label>
                        <input class="form-control" name="valor">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button class="btn btn-success w-25">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

<?php
include "../includes/rodape.php";
?>