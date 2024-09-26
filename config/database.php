<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Certifique-se de que o caminho para o autoloader está correto.

use Dotenv\Dotenv;

class Database {
  private $host;
  private $port;
  private $user;
  private $password;
  private $database;

  private $connection;

  public function __construct() {
    /*$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->load();
*/
    $this->host = 'aws-0-sa-east-1.pooler.supabase.com';
    $this->port = '6543';
    $this->user = 'postgres.jsdernwjockwygjwosdm';
    $this->password = 'Asd@#3312qwe';
    $this->database = 'postgres';
  }


  public function connect()
  {
    $this->connection = null;
    try {
      $dsn = "pgsql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->database;
      $this->connection = new PDO($dsn, $this->user, $this->password);
      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      echo "Erro de conexão: " . $e->getMessage();
    }
    return $this->connection;
  }
}
