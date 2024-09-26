<?php
$title = "Editar Livro";
$header = "Editar Livro";
include __DIR__ . '/../layouts/header.php';
?>

<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>Editar Livro</h2>
      <p class="lead">Editar o livo: <strong><?= $livro['titulo'] ?></strong> </p>
    </div>

    <div class="row g-5">

      <div class="col-md-12 col-lg-12">
        <h4 class="mb-3">Informações</h4>
        <form action="/livros/update/<?= $livro['id'] ?>" method="POST" class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Titulo</label>
              <input type="text" class="form-control" id="titulo"
              name="titulo" value="<?= $livro['titulo'] ?>" required>
              <div class="invalid-feedback">
                Titulo obrigatório
              </div>
            </div>

            <div class="col-md-6">
  <label for="autor_id" class="form-label">Autor</label>
  <select class="form-select" id="autor_id" name="autor_id" required>
    <option value="">Selecione...</option>
    <?php foreach ($autores as $autor) : ?>
      <option value="<?= $autor['id'] ?>" <?= $autor['id'] == $livro['autor_id'] ? 'selected' : '' ?>>
        <?= $autor['nome'] ?>
      </option>
    <?php endforeach; ?>
  </select>
  <div class="invalid-feedback">
    Selecione um autor
  </div>
</div>

<div class="col-md-6">
  <label for="categoria_id" class="form-label">Categoria</label>
  <select class="form-select" id="categoria_id" name="categoria_id" required>
    <option value="">Selecione...</option>
    <?php foreach ($categorias as $categoria) : ?>
      <option value="<?= $categoria['id'] ?>" <?= $categoria['id'] == $livro['categoria_id'] ? 'selected' : '' ?>>
        <?= $categoria['nome'] ?>
      </option>
    <?php endforeach; ?>
  </select>
  <div class="invalid-feedback">
    Selecione uma categoria
  </div>
</div>
            <div class="col-md-6">
              <label for="zip" class="form-label">Ano de publicação</label>
              <input type="number" class="form-control" id="ano_publicacao" name="ano_publicacao" value="<?= $livro['ano_publicacao'] ?>" required>
              <div class="invalid-feedback">
                Ano de publicação obrigatório
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">editar</button>
        </form>
      </div>
    </div>
  </main>

<!--<div class="container">
  <h2>Editar Livro</h2>
  <form action="/livros/edit/<?= $livro['id'] ?>" method="POST">
    <div class="form-group">
      <label for="titulo">Título</label>
      <input type="text" class="form-control" id="titulo" name="titulo" value="<?= $livro['titulo'] ?>">
    </div>
    <div class="form-group">
      <label for="autor">Autor</label>
      <input type="text" class="form-control" id="autor" name="autor" value="<?= $livro['autor'] ?>">
    </div>
    <div class="form-group">
      <label for="ano_publicacao">Ano de Publicação</label>
      <input type="text" class="form-control" id="ano_publicacao" name="ano_publicacao" value="<?= $livro['ano_publicacao'] ?>">
    </div>
    <div class="form-group">
      <label for="categoria">Categoria</label>
      <input type="text" class="form-control" id="categoria" name="categoria" value="<?= $livro['categoria'] ?>">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>-->

<?php include __DIR__ . '/../layouts/footer.php'; ?>
