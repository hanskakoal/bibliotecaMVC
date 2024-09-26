<?php
$title = "Adicionar Livro";
$header = "Adicionar Novo Livro";
include __DIR__ . '/../layouts/header.php';
?>
<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>Adicionar Livro</h2>
      <p class="lead">Cadastrar um novo livro</p>
    </div>

    <div class="row g-5">

      <div class="col-md-12 col-lg-12">
        <h4 class="mb-3">Informações</h4>
        <form action="/livros/store" method="POST" class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Titulo</label>
              <input type="text" class="form-control" id="titulo"
              name="titulo" placeholder="" value="" required>
              <div class="invalid-feedback">
                Titulo obrigatório
              </div>
            </div>

            <div class="col-md-6">
              <label for="country" class="form-label">Autor</label>
              <select class="form-select" id="autor_id" name="autor_id"  required>
                <option value="">Selecione...</option>
                <?php foreach ($autores as $autor) : ?>
                  <option value="<?= $autor['id'] ?>"><?= $autor['nome'] ?></option>
                <?php endforeach; ?>
              </select>
              <div class="invalid-feedback">
                Selecione um autor
              </div>
            </div>
             <div class="col-md-6">
              <label for="country" class="form-label">Categoria</label>
              <select class="form-select" id="categoria_id" name="categoria_id" required>
                <option value="">Selecione...</option>
                <?php foreach ($categorias as $categoria) : ?>
                  <option value="<?= $categoria['id'] ?>"><?= $categoria['nome'] ?></option>
                <?php endforeach; ?>
              </select>
              <div class="invalid-feedback">
                Selecione um autor
              </div>
            </div>



            <div class="col-md-6">
              <label for="zip" class="form-label">Ano de publicação</label>
              <input type="number" class="form-control" id="ano_publicacao" name="ano_publicacao" placeholder="" required>
              <div class="invalid-feedback">
                Ano de publicação obrigatório
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Cadastrar</button>
        </form>
      </div>
    </div>
  </main>

<?php include __DIR__ . '/../layouts/footer.php'; ?>
