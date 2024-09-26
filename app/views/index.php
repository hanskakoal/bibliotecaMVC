<?php
$title = "Inicio";
$header = "Leia o Livro";
include __DIR__ . '/./layouts/header.php';
?>

<div class="px-4 py-5 my-5 text-center">
    <h1 class="d-block mx-auto mb-4">📚 </h1>
    <h1 class="display-5 fw-bold text-body-emphasis">Projeto Biblioteca</h1>
    <h3 class="fs-5 text-body-secondary">Explicando o padrão de arquitetura MVC</h3>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">
            MVC é um padrão de arquitetura de software que divide uma aplicação em três componentes principais:
            <strong>Model</strong>, <strong>View</strong> e <strong>Controller</strong>.
            <ul>
                <li><strong>Model (Modelo)</strong>: Representa os dados da aplicação e a lógica de negócios. É responsável por acessar o banco de dados, realizar cálculos e processar dados. Ele interage diretamente com o <strong>Controller</strong> e notifica a <strong>View</strong> quando os dados são alterados.</li>
                <li><strong>View (Visão)</strong>: Responsável pela interface com o usuário e pela apresentação dos dados. A <strong>View</strong> exibe a informação fornecida pelo <strong>Model</strong> de forma amigável ao usuário.</li>
                <li><strong>Controller (Controlador)</strong>: Atua como intermediário entre o <strong>Model</strong> e a <strong>View</strong>. Ele processa as requisições do usuário, interage com o <strong>Model</strong> e decide qual <strong>View</strong> será exibida.</li>
            </ul>
            Esse padrão ajuda a organizar o código de maneira clara e modular, facilitando a manutenção e o crescimento de aplicações.
        </p>
    </div>
</div>

<?php include __DIR__ . '/./layouts/footer.php'; ?>
