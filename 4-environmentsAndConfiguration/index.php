<?php
require "functions.php";
require "Database.php";
// Connect to the database, and execute a query

//this would be the configuration for the database that goes in the .env file

$config = require 'config.php';

$db = new Database($config['database']);

$posts = $db->query("SELECT * FROM posts")->fetchAll();
$posts2 = $db->query("SELECT * FROM posts")->fetch(PDO::FETCH_ASSOC);

dd($posts2 + $posts);

/* foreach ($posts as $post) {
    echo "<h2>{$post['ID']}</h2>";
    echo "<p>{$post['title']}</p>";
}
 */