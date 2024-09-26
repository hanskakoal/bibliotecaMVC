<?php
require_once '../app/models/Livro.php';
require_once '../app/models/Autor.php';
require_once '../app/models/Categoria.php';


class LivroController {
    public function index() {
        $livroModel = new Livro();
        $livros = $livroModel->getAllLivros();
        $this->loadView('livros/index', ['livros' => $livros]);
    }

    public function create() {
        $autorModel = new Autor();
        $autores = $autorModel->getAllAutores();
        $categoriaModel = new Categoria();
        $categorias = $categoriaModel->getAllCategorias();
        $this->loadView('livros/create', ['autores' => $autores, 'categorias' => $categorias]);
    }

    public function store() {
        $livroModel = new Livro();
        $livroModel->addLivro($_POST['titulo'], $_POST['autor_id'], $_POST['categoria_id'], $_POST['ano_publicacao']);
        header('Location: /livros');
    }


   public function edit($id) {
    $livroModel = new Livro();
    $livro = $livroModel->getLivroById($id);
    if (!$livro) {
        throw new Exception("Livro não encontrado com o ID: " . $id);
    }

    $autorModel = new Autor();
    $autores = $autorModel->getAllAutores();
    $categoriaModel = new Categoria();
    $categorias = $categoriaModel->getAllCategorias();

    // Carregar a view correta
    $this->loadView('livros/edit', ['livro' => $livro, 'autores' => $autores, 'categorias' => $categorias]);
}


    public function update($id) {
        $livroModel = new Livro();
        $livroModel->updateLivro($id, $_POST['titulo'], $_POST['autor_id'], $_POST['categoria_id'], $_POST['ano_publicacao']);
        header('Location: /livros');
    }

    public function delete($id) {
        $livroModel = new Livro();
        $livroModel->deleteLivro($id);
        header('Location: /livros');
    }

    public function loadView($viewName, $data = []) {
    extract($data);
    $viewPath = __DIR__ . '/../views/' . $viewName . '.php';
    if (file_exists($viewPath)) {
        require_once $viewPath;
    } else {
        throw new Exception("View não encontrada: " . $viewPath);
    }
}

}
