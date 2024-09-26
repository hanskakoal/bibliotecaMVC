<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Biblioteca' ?></title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

  <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">📚  Biblioteca</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item">
          <a href="/" class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/') ? 'active' : '' ?>">Inicio</a>
        </li>
        <li class="nav-item">
          <a href="/livros" class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/livros') ? 'active' : '' ?>">Livros</a>
        </li>
      </ul>
    </header>
  </div>
<main>
