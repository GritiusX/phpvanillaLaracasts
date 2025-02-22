<?php
// if only has the class, then the file name should be in capital letters
class Database
{
    public $connection;
    //__construct => everytime you create a NEW instance of the class, it calls the __construct method
    public function __construct(
        $config,
        $username = "root",
        $password = ""
    ) {
        //option 1 for connection string:
        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";
        //option 2 for connection string:
        http_build_query($config, '', ';');
        $dsn2 = "mysql:" . http_build_query($config, '', ';');

        $options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];
        $this->connection = new PDO($dsn, $username, $password, $options);
    }

    public function query($query)
    {

        try {
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Consulta para obtener los posts
            $stmt = $this->connection->query($query);

            // Obtener resultados
            //$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $stmt;
        } catch (PDOException $e) {
            die("❌ Error en la conexión: " . $e->getMessage());
        }
    }
}
