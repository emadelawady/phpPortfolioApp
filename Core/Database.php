<?php 

declare(strict_types=1);

namespace Core;

use PDO;

class Database {
    public $connection;
    public $statement;


    public function __construct(private string $db_connection = '',
                                private array $config = [],
                                private string $username = '',
                                private string $password = '')
    {
        $this->db_connection = $_ENV['DB_CONNECTION'];
        $this->config = $this->config();
        $this->username = $_ENV['DB_USERNAME'];
        $this->password = $_ENV['DB_PASSWORD'];

        $dns = $this->db_connection.':' . http_build_query(data:$this->config, arg_separator:';');


        $this->connection = new PDO($dns,$this->username,$this->password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

    }

    private function config(){
        return [
            'host' => $_ENV['DB_HOST'],
            'port' => $_ENV['DB_PORT'],
            'dbname' => $_ENV['DB_DATABASE'],
            'charset' => $_ENV['CHARSET']

        ];
    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }
}