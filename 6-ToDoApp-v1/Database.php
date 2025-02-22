<?php
// if only has the class, then the file name should be in capital letters
class Database
{
    public $connection;
    public $statement;
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
    public function query($query, $params = [])
    {
        try {
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Preparar la consulta
            $this->statement = $this->connection->prepare($query);

            // Ejecutar la consulta con los parámetros
            $this->statement->execute($params);

            return $this; //returning the instance of the class
        } catch (PDOException $e) {
            die("❌ Error en la consulta: " . $e->getMessage());
        }
    }
    public function get()
    {
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find()
    {
        return $this->statement->fetch();
    }
    public function findOrFail()
    {
        $result = $this->find();
        if (! $result) {
            abort();
        }

        return $result;
    }

    //OLD QUERY FUNCTION
    public function OLD__query($query)
    {

        try {
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Consulta para obtener los posts
            $statement = $this->connection->query($query);

            // Obtener resultados
            $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $statement;
        } catch (PDOException $e) {
            die("❌ Error en la conexión: " . $e->getMessage());
        }
    }
}
