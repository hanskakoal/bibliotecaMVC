
# Projeto de Gestão de Livros
Este é um projeto de gestão de uma biblioteca, desenvolvido em PHP puro, utilizando Composer para gerenciamento de dependências e seguindo a arquitetura MVC (Model-View-Controller). O sistema permite o gerenciamento de livros, autores e empréstimos.

### Funcionalidades
- Gerenciamento de Livros: Adicionar, editar, remover e listar livros.
- Gerenciamento de Autores: Associar livros a autores e gerenciar suas informações.
- Empréstimos: Registro de empréstimos e devoluções de livros.
- Busca Avançada: Pesquisar livros por título, autor ou categoria.
- Tecnologias Utilizadas
- PHP: Linguagem de programação principal usada no backend.
- Composer: Gerenciador de dependências PHP.
- Supabase: Banco de dados utilizado para armazenar informações.
- Arquitetura MVC: Padrão de projeto utilizado para organização do código.
### Estrutura do Projeto
A estrutura de diretórios segue a arquitetura MVC para separar responsabilidades:

```bash
/biblioteca-mvc/
├── app
│   ├── controllers
│   ├── models
│   ├── views
├── config
├── public
│   ├── index.php
├── vendor
├── .env
└── composer.json
```
- app/controllers: Contém os controladores que fazem a comunicação entre o modelo e a visão.
- app/models: Contém as classes do modelo que interagem diretamente com o banco de dados.
- app/views: Contém os arquivos de visualização (HTML/PHP) que são exibidos para o usuário.
- config: Arquivo de configuração do projeto.
- public/index.php: Arquivo de entrada da aplicação.
- vendor: Diretório onde o Composer gerencia as dependências do projeto.
- .env: Arquivo de configuração das variáveis de ambiente.
- composer.json: Arquivo de configuração do Composer.

## Documentação

A documentação completa pode ser encontrada no [arquivo docs/doc.md](docs/documento.md).

### Instalação
Pré-requisitos
- PHP 8.0 ou superior
- Composer instalado
- Banco de dados PostgreSQL (configurado no Supabase)
- DBeaver (opcional, para gerenciar o banco de dados)
### Passos para instalar
1. Clone o repositório:

```bash
git clone https://github.com/hanskakoal/bibliotecaMVC.git
cd projeto-biblioteca
```
2. Instale as dependências com o Composer:

```bash
composer install
```
Configure o arquivo .env com as credenciais do seu banco de dados:


3. Execute o servidor embutido do PHP:

```bash
Copiar código
php -S localhost:8000 -t public
```
4. Acesse a aplicação em seu navegador: http://localhost:8000

### Uso
1. Gerenciar Livros: No menu principal, acesse "Livros" para adicionar, editar ou remover livros.

## Licença
Este projeto é licenciado sob a MIT License.
#   b i b l i o t e c a M V C  
 