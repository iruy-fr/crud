<main>
    <section>
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3">Cadastro de projetos</h2>

    <form method="post">
        <div class="form-group">
            <label>Título</label>
            <input class="form-control" type="text" name="titulo" required>
        </div>
        <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control" name="descricao" required></textarea>
        </div>
        <div class="form-group">
            <label>Status</label>
            <div>
                <div class="form-check form-check-inline">
                    <label class="form-group">
                        <input type="radio" name="ativo" value="s" required> Ativo
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-group">
                        <input type="radio" name="ativo" value="n" required> Inativo
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>
</main>