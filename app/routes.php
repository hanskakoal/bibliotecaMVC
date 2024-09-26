<?php
require_once __DIR__ . '/../app/controller/LivroController.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$controller = new LivroController();

switch ($uri) {
    case '/':
        require_once __DIR__ . '/../app/views/index.php';
        break;
    case '/livros':
        $controller->index();
        break;
    case '/livros/create':
        $controller->create();
        break;
    case '/livros/store':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->store();
        }
        break;
    case (preg_match('/\/livros\/edit\/(\d+)/', $uri, $matches) ? true : false):
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $controller->edit($matches[1]);
        }
        break;
    case (preg_match('/\/livros\/update\/(\d+)/', $uri, $matches) ? true : false):
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->update($matches[1]);
        }
        break;
    case '/livros/delete/':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->delete($_POST['id']);
        }
        break;
    default:
        echo "Página não encontrada.";
        break;
}
