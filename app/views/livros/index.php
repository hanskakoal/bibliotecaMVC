<?php
$title = "Lista de Livros";
$header = "Livros Disponíveis";
include __DIR__ . '/../layouts/header.php';


?>
 <div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">LIVROS</h2>
   <div class="text-end mt-3">
        <a href="/livros/create" class="btn btn-success">Adicionar Livro</a>
    </div>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
     <?php foreach ($livros as $livro): ?>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          📚
        </div>
        <h5 class="fw-bold"><?= $livro['titulo'] ?></h5>
        <p class="mb-0">Autor: <?= $livro['autor'] ?></p>
        <p class="mb-0">Categoria: <?= $livro['categoria'] ?></p>
        <p class="mb-0">Ano de Publicação: <?= $livro['ano_publicacao'] ?></p>
     <a href="/livros/edit/<?= $livro['id'] ?>" class="icon-link text-primary" >
    Editar
    <svg class="bi"><use xlink:href="#chevron-right"/></svg>
</a>

<?php if (isset($livro['id'])): ?>
    <form action="/livros/delete/" method="POST" style="display:inline;">
        <input type="hidden" name="id" value="<?= $livro['id'] ?>">
        <button type="submit" class="icon-link text-danger" onclick="return confirm('Tem certeza que deseja deletar?');" style="border: none; background: none; padding: 0; cursor: pointer;">
            Deletar
            <svg class="bi"><use xlink:href="#chevron-right"/></svg>
        </button>
    </form>
<?php endif; ?>


      </div>
      <?php endforeach; ?>
    </div>
  </div>
<!--<h2>Livros na Biblioteca</h2>
<ul>
    <?php foreach ($livros as $livro): ?>
        <li><?= $livro['titulo'] ?> (<?= $livro['ano_publicacao'] ?>) <?= $livro['autor'] ?></li>
    <?php endforeach; ?>
</ul>-->

<?php include __DIR__ . '/../layouts/footer.php'; ?>
