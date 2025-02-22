<?php
require "functions.php";
require 'router.php';

/* class Person
{
    public $name;
    public $age;
    
    public function breathe()
    {
        echo "$this->name is breathing"; //$this->name . "is breathing";
        }
        }
        
        $person = new Person();
        
        $person->name = "John Doe";
        $person->age = 25;
        
        dd($person->breathe()); */

// connect to our MySQL database
// 1st try:
/* $servername = "localhost"; // Servidor (en Laragon es localhost)
$username = "root"; // Usuario por defecto
$password = ""; // Sin contraseña en Laragon
$database = "demo"; // Nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: $conn->connect_error");
}
echo "✅ Conexión exitosa a la base de datos."; */

//2nd try

$dsn = "mysql:host=localhost;port=3306;dbname=demo;charset=utf8mb4";
$username = "root";
$password = "";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Consulta para obtener los posts
    $stmt = $pdo->query("SELECT * FROM posts");

    // Obtener resultados
    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

    dd($posts);
} catch (PDOException $e) {
    die("❌ Error en la conexión: " . $e->getMessage());
}
